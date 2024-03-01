import NavPublic from '@/Layouts/NavPublicLayout';
import { Head } from '@inertiajs/react';

export default function Show({ auth, event }) {

    const countTags = Object.keys(event.tags).length;
    const countArtists = Object.keys(event.artists).length;
    console.log(event);

    return (
        <NavPublic
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{event.name} - <span className="py-2"><span className="p-2 bg-indigo-700 rounded-lg">{event.date}</span></span></h2>}
        >
            <Head title={"Event - " + event.name} />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="mt-5 grid grid-rows-1 lg:grid-cols-1 gap-1 text-gray-200">

                        <div href={"/events/"+event.id} className={`mb-5 p-8 border-4 border-indigo-700 bg-gray-800 rounded-3xl`}>
                            <div className="space-y-2">
                                
                                <h3 className="text-xl md:text-1xl">
                                    { countTags <= 1 ?  "Tag" : "Tags" } :
                                </h3>
                                <p className="py-2 space-x-2">
                                    {event.tags.map((tag) => {
                                        return (
                                            <span key={tag.id} className="p-2 bg-indigo-700 rounded-lg">{tag.name}</span>
                                        );
                                    })}
                                </p>

                                <h3 className="text-xl md:text-1xl">Adresse :</h3>
                                <p className="">
                                    {event.room.place.city.country.name}, <br/>
                                    {event.room.place.city.name}, <br/>
                                    {event.room.place.street}, <br/>
                                    Chez {event.room.place.name} dans la salle N°{event.room.nb_room}
                                </p>

                                <h3 className="text-xl md:text-1xl">Description :</h3>
                                <p>{event.description}</p>

                                <h3 className="text-xl md:text-1xl">
                                    { countArtists <= 1 ?  "Artist" : "Artists" } :
                                </h3>
                                <ul className="list-disc list-inside">
                                    {event.artists.map((artist) => {
                                        return (
                                            <li key={artist.id}>{artist.firstname} {artist.lastname}</li>
                                        );
                                    })}
                                </ul>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </NavPublic>
    );
}
