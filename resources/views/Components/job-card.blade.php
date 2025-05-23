@props(['job'])
<div class="flex flex-col text-center">   
    <div class="self-start text-sm">Laracasts</div>

    <div class="py-4">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-600">Video Producer</h3>
        <p class="text-sm mt-4">Full Time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <div>
                @foreach ($job->tags as $tag )
                    <x-tag :$tag size="small">Backend</x-tag>
                @endforeach
            </div>
        </div>

        <x-employer-logo :width="42" />
    </div>
    
</div>
