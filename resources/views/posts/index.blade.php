<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tigh py-4 text-center uppercase">
            {{ __('Postagens') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-2/4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden text-center uppercase">
                    <thead>
                      <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">ID</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Titulo</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Descrição</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Data de Cadastro</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $post->id }}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $post->title }}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $post->content }}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ date( 'd/m/Y' , strtotime($post->created_at)) }}</td>
                                
                                
                            </tr>
                      @endforeach
                    </tbody>
                  </table>
                
            </div>
        </div>
    </div>
</x-app-layout>
