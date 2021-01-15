<div class="max-w-xs rounded overflow-hidden shadow-lg my-4 mx-4">
    <img class="w-full" src="{{ $project->logo ? $project->logo : 'nope' }}" alt="Sunset in the mountains">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-1">{{ $project->name }}</div>
        <div class="text-md mb-2">{{ \Carbon\Carbon::parse($project->publishedDate)->format('M-Y') }}</div>
        <p class="text-grey-darker text-base">
            {{ $project->description }}
        </p>
    </div>

    <div class="px-6 py-4">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
            {{ $project->type }}
        </span>
    </div>

    <div class="px-6 py-4">
        <a class="md:w-16 bg-gray-800 text-white font-bold py-2 px-4 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300 hover:text-white"
           href=" {{ $project->projectUrl }}">
            Visitar
        </a>
    </div>

</div>