import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import {useState} from "react";
import { router } from '@inertiajs/react'

export default function Dashboard({weights}) {
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
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />
            <pre>{JSON.stringify(weights, null, 2)}</pre>
            <button onClick={(e) => {
                e.preventDefault();
                router.post('/add', values)
            }}>FOOBAR</button>
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
