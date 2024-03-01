import NavPublic from '@/Layouts/NavPublicLayout';
import { Head, Link } from '@inertiajs/react';

export default function Events({ auth, events }) {

    return (
        <NavPublic
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Events</h2>}
        >
            <Head title="Events" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="mt-5 grid grid-rows-1 lg:grid-cols-2 gap-2 text-gray-200">
                        {events.map((event) => {
                            return (
                                <Link key={event.id} href={"/events/"+event.id} className={`mb-5 p-8 border-4 border-indigo-700 bg-gray-800 rounded-3xl`}>
                                    <div className="space-y-2">
                                        <h3 className="text-xl md:text-2xl">{event.name}</h3>
                                        <p className="py-2"><span className="p-2 bg-indigo-700 rounded-lg">{event.date}</span></p>
                                        <p>{event.description}</p>
                                    </div>
                                </Link>
                            );
                        })}
                    </div>
                </div>
            </div>
        </NavPublic>
    );
}
