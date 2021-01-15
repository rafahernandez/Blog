@extends('_layouts.master')


@section('body')
  <section class="flex-col justify-center items-center text-center mb-20">
    <img src="/assets/img/me.jpg" alt="Rafael Hernández" class="inline-flex rounded-full h-32 w-32 bg-contain mx-auto">
    <h1>¡Hola! 👋 I'm Rafael.</h1>
    <ul class="list-none">
      <li>👨💼 &nbsp; Senior backend developer at <a href="https://karbook.com" rel="nofollow noreferrer">Karbook</a>
      </li>
      <li>👨‍💻 &nbsp; TALL stack (TailwindCSS, AlpineJS, Laravel, Livewire) aficionado</li>
      <li>🇲🇽 &nbsp; Based in Puebla, Mexico (Se habla español)</li>
    </ul>

    <h4>Follow me in social media</h4>
    <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
      <a class="link" href="https://www.youtube.com/channel/UCBs-MFZQ-ILhus36iRaTaww"
         data-tippy-content="@facebook_handle">
        <svg class="h-6 fill-current text-blue-900 hover:text-teal-700" role="img" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg"><title>YouTube</title>
          <path d="M4.652 0h1.44l.988 3.702.916-3.702h1.454l-1.665 5.505v3.757h-1.431v-3.757l-1.702-5.505zm6.594 2.373c-1.119 0-1.861.74-1.861 1.835v3.349c0 1.204.629 1.831 1.861 1.831 1.022 0 1.826-.683 1.826-1.831v-3.349c0-1.069-.797-1.835-1.826-1.835zm.531 5.127c0 .372-.19.646-.532.646-.351 0-.554-.287-.554-.646v-3.179c0-.374.172-.651.529-.651.39 0 .557.269.557.651v3.179zm4.729-5.07v5.186c-.155.194-.5.512-.747.512-.271 0-.338-.186-.338-.46v-5.238h-1.27v5.71c0 .675.206 1.22.887 1.22.384 0 .918-.2 1.468-.853v.754h1.27v-6.831h-1.27zm2.203 13.858c-.448 0-.541.315-.541.763v.659h1.069v-.66c.001-.44-.092-.762-.528-.762zm-4.703.04c-.084.043-.167.109-.25.198v4.055c.099.106.194.182.287.229.197.1.485.107.619-.067.07-.092.105-.241.105-.449v-3.359c0-.22-.043-.386-.129-.5-.147-.193-.42-.214-.632-.107zm4.827-5.195c-2.604-.177-11.066-.177-13.666 0-2.814.192-3.146 1.892-3.167 6.367.021 4.467.35 6.175 3.167 6.367 2.6.177 11.062.177 13.666 0 2.814-.192 3.146-1.893 3.167-6.367-.021-4.467-.35-6.175-3.167-6.367zm-12.324 10.686h-1.363v-7.54h-1.41v-1.28h4.182v1.28h-1.41v7.54zm4.846 0h-1.21v-.718c-.223.265-.455.467-.696.605-.652.374-1.547.365-1.547-.955v-5.438h1.209v4.988c0 .262.063.438.322.438.236 0 .564-.303.711-.487v-4.939h1.21v6.506zm4.657-1.348c0 .805-.301 1.431-1.106 1.431-.443 0-.812-.162-1.149-.583v.5h-1.221v-8.82h1.221v2.84c.273-.333.644-.608 1.076-.608.886 0 1.18.749 1.18 1.631v3.609zm4.471-1.752h-2.314v1.228c0 .488.042.91.528.91.511 0 .541-.344.541-.91v-.452h1.245v.489c0 1.253-.538 2.013-1.813 2.013-1.155 0-1.746-.842-1.746-2.013v-2.921c0-1.129.746-1.914 1.837-1.914 1.161 0 1.721.738 1.721 1.914v1.656z"/>
        </svg>
      </a>
      <a class="link" href="https://twitter.com/joraheta" data-tippy-content="@twitter_handle">
        <svg class="h-6 fill-current text-blue-900 hover:text-teal-700" role="img" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg"><title>Twitter</title>
          <path
                  d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"></path>
        </svg>
      </a>
      <a class="link" href="https://github.com/rafahernandez" data-tippy-content="@github_handle">
        <svg class="h-6 fill-current text-blue-900 hover:text-teal-700" role="img" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg"><title>GitHub</title>
          <path
                  d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
        </svg>
      </a>
      <a class="link" href="https://www.linkedin.com/in/jose-rafael-hernandez-tadeo/"
         data-tippy-content="@unsplash_handle">
        <svg class="h-6 fill-current text-blue-900 hover:text-teal-700" role="img" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title>
          <path
                  d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
        </svg>
      </a>
    </div>
  </section>

  @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
    <div class="flex flex-col md:flex-row md:-mx-6">
      @foreach ($row as $post)
        <div class="w-full md:w-1/2 md:mx-6">
          @include('_components.post-preview-inline')
        </div>

        @if (! $loop->last)
          <hr class="block md:hidden w-full border-b mt-2 mb-6">
        @endif
      @endforeach
    </div>

    @if (! $loop->last)
      <hr class="w-full border-b mt-2 mb-6">
    @endif
  @endforeach
@stop
