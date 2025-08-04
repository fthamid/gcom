
<th scope="col" class="px-4 py-3" wire:click="setSortBy('{{ $fieldName }}')">
<button class="flex items-center">
{{ $displayName }}
        <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" 
        stroke-width="1.5" stroke="currentColor" class="ml-1 size-3">
        <path stroke-linecap="round" stroke-linejoin="round"
        @if($sortBy !== $fieldName ) 
            d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" 
        @elseif( $sortDirection  == 'asc')
            d="m19.5 8.25-7.5 7.5-7.5-7.5"
        @else
            d="m4.5 15.75 7.5-7.5 7.5 7.5"
        @endif
        />
        </svg>
</button>
                                                                                    
                                        
                                        
                                    </th>