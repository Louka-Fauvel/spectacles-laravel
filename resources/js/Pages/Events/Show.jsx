import NavPublic from '@/Layouts/NavPublicLayout';
import { Head, Link } from '@inertiajs/react';

export default function Show({ auth, event }) {

    return (
        <NavPublic
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Event - {event.name}</h2>}
        >
            <Head title={"Event - " + event.name} />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <p>Test</p>
                </div>
            </div>
        </NavPublic>
    );
}
