<x-app-layout>
    <section class="mx-[15%] right mt-[5%]">
        @if (Session::get('success'))
            <div class="bg-green-400 my-12 rounded-lg text-white  p-4">
                <p>{{ Session::get('success') }}</p>
            </div>
        @elseif (Session::get('error'))
            <div class="bg-red-400 my-12 rounded-lg text-black  p-4">
                <p>{{ Session::get('error') }}</p>
            </div>
        @endif
        <div class="text-2xl border-b my-4">
            Gestion des Hotels
        </div>
        <div>
            <!-- Bouton pour ouvrir le modal -->
            <button id="openModal"
                class="float-right bg-slate-500 p-3 rounded-xl hover:border hover:bg-slate-200 hover:text-black text-white font-bold py-2 px-4 rounded">
                +
            </button>
        </div>
        <div class="">
            <table class="min-w-full">
                <thead>
                    <td style="width:5%" class="text-center py-2 px-4 border-b border-gray-200 bg-gray-100 font-bold uppercase text-sm text-gray-600">
                        #</td>
                    <td style="width:30%" class="text-center py-2 px-4 border-b border-gray-200 bg-gray-100 font-bold uppercase text-sm text-gray-600">
                        Nom</th>
                    <td class="text-center py-2 px-4 border-b border-gray-200 bg-gray-100 font-bold uppercase text-sm text-gray-600">
                        Prix</td>
                    <td
                        class="text-center py-2 px-4 border-b border-gray-200 bg-gray-100 font-bold uppercase text-sm text-gray-600">
                        Image</td>
                    <td style="width:25%"
                        class="text-center py-2 px-4 border-b border-gray-200 bg-gray-100 font-bold uppercase text-sm text-gray-600">
                    </td>
                </thead>
                <tbody>
                    @forelse ($hotels as $hotel)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">{{$i++}}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{$hotel->name}}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{$hotel->price}}</td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <img src="storage/app/{{$hotel->path_img}}" alt="logo">
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200 space-x-3">
                                {{-- <a href="" class="bg-blue-500 p-2 rounded-sm shadow">
                                    Voir
                                </a> --}}
                                <a href="{{route('delete',$hotel->id)}}" class="bg-red-500 p-2 rounded-sm shadow">
                                    Supprimer
                                </a>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                    <!-- Ajoutez ici les 6 autres éléments de la table -->
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            <ul class="pagination pagination-xl m-0 float-right flex">
                <li class="page-item m-2 text-slate-500 hover:border-b-2"><a class="page-link" href="{{ $hotels->previousPageUrl() }}">«
                        Précedant</a></li>
                <li class="page-item m-2 text-slate-500 hover:border-b-2"><a class="page-link" href="{{ $hotels->nextPageUrl() }}">
                        Suivant »</a></li>
            </ul>
        </div>

        <!-- Modal -->
        <!-- Modal -->
        <div id="myModal"
            class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center w-full">
            <!-- Contenu du modal -->
            <div class="bg-white rounded-lg p-8">
                <h2 class="text-lg font-bold mb-4">Ajouter un Hôtel</h2>
                <form class="grid grid-cols-2 gap-4" action="{{ route('hotels.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Nom :
                        </label>
                        <input
                            class=" shadow  border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name" type="text" placeholder="Nom">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="path_img">
                            Image :
                        </label>
                        <input
                            class="shadow  border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="path_img" name="path_img" type="file" placeholder="Chemin de l'image">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                            Prix :
                        </label>
                        <input
                            class="shadow  border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="price" name="price" type="number" placeholder="Nombre d'étoiles">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="commune">
                            Commune :
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="commune" name="commune">
                            <option value="" selected disabled>Choisissez une commune</option>
                            <option value="Bandalungwa">Bandalungwa</option>
                            <option value="Barumbu">Barumbu</option>
                            <option value="Bumbu">Bumbu</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Kalamu">Kalamu</option>
                            <option value="Kasa-Vubu">Kasa-Vubu</option>
                            <option value="Kimbanseke">Kimbanseke</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Kintambo">Kintambo</option>
                            <option value="Lemba">Lemba</option>
                            <option value="Lingwala">Lingwala</option>
                            <option value="Makala">Makala</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Masina">Masina</option>
                            <option value="Matete">Matete</option>
                            <option value="Mont-Ngafula">Mont-Ngafula</option>
                            <option value="Ngaliema">Ngaliema</option>
                            <option value="Nsele">Nsele</option>
                            <option value="Selembao">Selembao</option>
                            <option value="Selembao">Selembao</option>
                            <option value="Ngiri-Ngiri">Ngiri-Ngiri</option>
                            <option value="N'djili">N'djili</option>
                            <option value="Limete">Limete</option>
                            <option value="Kinsenso">Kinsenso</option>
                            <option value="Kisenso">Kisenso</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="adresse">
                            Adresse :
                        </label>
                        <input
                            class="shadow  border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="adresse" name="adresse" type="text" placeholder="Adresse">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="boite_mail">
                            Email :
                        </label>
                        <input
                            class="shadow  border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="boite_mail" name="boite_mail" type="email" placeholder="Adresse email">
                    </div>

                    <div class="col-span-2 flex justify-end mt-6">
                        <a id="closeModal"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Fermer
                        </a>
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-2">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            // Fonction pour ouvrir le modal
            function openModal() {
                document.getElementById("myModal").classList.remove("hidden");
            }

            // Fonction pour fermer le modal
            function closeModal() {
                document.getElementById("myModal").classList.add("hidden");
            }

            // Écouteurs d'événements pour les boutons
            document.getElementById("openModal").addEventListener("click", openModal);
            document.getElementById("closeModal").addEventListener("click", closeModal);
        </script>
    </section>
</x-app-layout>
