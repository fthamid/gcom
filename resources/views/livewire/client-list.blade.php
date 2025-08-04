<div>
        <section class="mt-10">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between d p-4">
                        <div class="flex">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input  type="text"  wire:model.live="search" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                    placeholder="Chercher" required="">
                            </div>
                        </div>
                        <div class="flex">
                        <input type="text" wire:model.live="message" placeholder="Message"/>
                        </div>
                        <div class="flex space-x-3">
                            <div class="flex space-x-3 items-center">
                                <label class="w-40 text-sm font-medium text-gray-900">Client Type :</label>
                                <select  wire:model.live="is_client"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="">Tous</option>
                                    <option value="1">Client</option>
                                    <option value="0">Fournisseur</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                 <th><input type="checkbox" wire:model.live="all_selected"  ></th>   
                                @include('includes.table_sortable_th', ['fieldName' => 'nom','displayName' => 'Nom'])
                                @include('includes.table_sortable_th', ['fieldName' => 'email','displayName' => 'Email'])
                                @include('includes.table_sortable_th', ['fieldName' => 'telephone','displayName' => 'Téléphone'])
                                @include('includes.table_sortable_th', ['fieldName' => 'is_client','displayName' => 'Type'])
                                @include('includes.table_sortable_th', ['fieldName' => 'adresse','displayName' => 'Adresse'])
                                @include('includes.table_sortable_th', ['fieldName' => 'code_postal','displayName' => 'Code Potstal'])
                                @include('includes.table_sortable_th', ['fieldName' => 'ville','displayName' => 'Ville'])
                                @include('includes.table_sortable_th', ['fieldName' => 'pays','displayName' => 'Pays'])
                                @include('includes.table_sortable_th', ['fieldName' => 'created_at','displayName' => 'Date création'])
                                @include('includes.table_sortable_th', ['fieldName' => 'updated_at','displayName' => 'Dernière mise à jour'])
                                    
                                    <th>
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)

                                <tr wire:key="{{$client->id}}" class="border-b dark:border-gray-700">
                                <td><input type="checkbox" class="form-control" value="{{ $client->id }}"
                                wire:model.live="selectedClients"
                                wire:change="selectionChange('{{ $client->id}}')"
                               
                               
                                />{{ $client->id }} 
                              
                                
                            
                            </td>
                                    <td scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$client->nom}}</td>
                                    <td class="px-4 py-3">{{$client->email}}</td>
                                    <td class="px-4 py-3 text-green-500">{{$client->telephone}}</td>
                                    <td class="px-4 py-3 {{$client->is_client ? 'text-blue-500':'text-green-500'}}">{{$client->is_client ? "Client": "FRS"}}</td>
                                    <td class="px-4 py-3">{{$client->adresse}}</td>
                                    <td class="px-4 py-3">{{$client->codepostal}}</td>
                                    <td class="px-4 py-3">{{$client->ville}}</td>
                                    <td class="px-4 py-3">{{$client->pays}}</td>
                                    <td class="px-4 py-3">{{$client->created_at}}</td>
                                    <td class="px-4 py-3">{{$client->updated_at}}</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button 
                                        onclick="confirm('Supprimer {{$client->nom}}, En êtes vous sûr ?') || event.stopImmediatePropagation()"  
                                        wire:click="delete( {{ $client->id}} )"
                                        class="px-3 py-1 bg-red-500 text-white rounded">X</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="py-4 px-3">
                        <div class="flex ">
                            <div class="flex space-x-4 items-center mb-3">
                                <label class="w-32 text-sm font-medium text-gray-900">Lignes par Page</label>
                                <select wire:model.live="perPage"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="3">3</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                
                            </div>
                            &nbsp;
                            <div class="flex space-x-4 items-center mb-3">{{$clients->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
