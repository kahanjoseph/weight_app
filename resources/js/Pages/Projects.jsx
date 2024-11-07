import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import {useState} from "react";
import {Table, TableBody, TableCell, TableHead, TableHeader, TableRow} from "@/Components/catalyst/table.jsx";
import { CheckIcon, XMarkIcon } from '@heroicons/react/24/solid'
import Pagination from "@/Components/Pagination.jsx";
import {Button} from "@/Components/catalyst/button.jsx";
import {Dialog, DialogDescription, DialogBody, DialogTitle, DialogActions} from "@/Components/catalyst/dialog.jsx";
import { Input } from '@/components/catalyst/input.jsx'
import { Field, Label } from '@/components/catalyst/fieldset.jsx';

export default function Dashboard({projects}) {
    let [isOpen, setIsOpen] = useState(false)
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
            {/*<Dialog open={isOpen} onClose={setIsOpen}>*/}
            {/*    <DialogTitle>Refund payment</DialogTitle>*/}
            {/*    <DialogDescription>*/}
            {/*        The refund will be reflected in the customer’s bank account 2 to 3 business days after processing.*/}
            {/*    </DialogDescription>*/}
            {/*    <DialogBody>*/}
            {/*        <Field>*/}
            {/*            <Label>Amount</Label>*/}
            {/*            <Input name="amount" placeholder="$0.00" />*/}
            {/*        </Field>*/}
            {/*    </DialogBody>*/}
            {/*    <DialogActions>*/}
            {/*        <Button plain onClick={() => setIsOpen(false)}>*/}
            {/*            Cancel*/}
            {/*        </Button>*/}
            {/*        <Button onClick={() => setIsOpen(false)}>Refund</Button>*/}
            {/*    </DialogActions>*/}
            {/*</Dialog>*/}
            <Head title="Dashboard"/>
            <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
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
                                {/*<TableCell>{project.complete ? <CheckIcon className='size-6'/> : <XMarkIcon className='size-6'/>}</TableCell>*/}
                                {/*<Button type="button" onClick={() => setIsOpen(true)}>*/}
                                {/*    Refund payment*/}
                                {/*</Button>*/}
                            </TableRow>
                        ))}
                    </TableBody>
                </Table>
                {/*<Pagination current_page={projects?.current_page} total_pages={projects.total / projects.per_page} href='/projects'/>*/}
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
