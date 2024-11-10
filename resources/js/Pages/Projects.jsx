import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import {useState} from "react";
import {Table, TableBody, TableCell, TableHead, TableHeader, TableRow} from "@/Components/catalyst/table.jsx";
import { CheckIcon, XMarkIcon } from '@heroicons/react/24/solid'
import Pagination from "@/Components/Pagination.jsx";
import {Button} from "@/Components/catalyst/button.jsx";
import Dialog from "@/Components/Dialog.jsx";

export default function Dashboard({projects}) {
    let [isOpen, setIsOpen] = useState(false);
    const [edit, setEdit] = useState(projects.data[0])
    const [values, setValues] = useState({
        user_id: "1",
        weight: 189,
        remarks: "FOOBAR!!!",
        date: '2023-10-03'
    })

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Projects
                </h2>
            }
        >
            <Dialog isOpen={isOpen} setIsOpen={setIsOpen} project={edit}/>
            <Head title="Dashboard"/>
            <div className="mx-auto max-w-7xl sm:px-6 lg:px-8 pt-5">
                <Table>
                    <TableHead>
                        <TableRow>
                            <TableHeader>Title</TableHeader>
                            <TableHeader>Stack</TableHeader>
                            <TableHeader>Date</TableHeader>
                            <TableHeader>URL</TableHeader>
                            <TableHeader>Complete</TableHeader>
                            <TableHeader>Edit</TableHeader>
                        </TableRow>
                    </TableHead>
                    <TableBody>
                        {projects.data.map((project) => (
                            <TableRow key={project.id}>
                                <TableCell>{project.title}</TableCell>
                                <TableCell>{project.stack}</TableCell>
                                <TableCell>{project?.date}</TableCell>
                                <TableCell>{project?.url}</TableCell>
                                <TableCell>{project.complete ? <CheckIcon className='size-6 text-green-500'/> : <XMarkIcon className='size-6 text-red-500'/>}</TableCell>
                                <TableCell><Button className='cursor-pointer' type="button" onClick={() => {
                                    setIsOpen(true)
                                    setEdit(projects.data.find(item => item.id === project.id))
                                }}>
                                    Edit
                                </Button></TableCell>
                            </TableRow>
                        ))}
                    </TableBody>
                </Table>
                <Pagination current_page={projects?.current_page ?? 1} total_pages={(projects.total / projects.per_page)} href={'/projects'}/>
            </div>
            <pre>{JSON.stringify(projects, null ,2)}</pre>
            <button onClick={(e) => {
                e.preventDefault();
                router.post('/add', values)
            }}>FOOBAR
            </button>
            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            You're logged in!
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
