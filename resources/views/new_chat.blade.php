<x-app-layout>
    <x-slot name="header">
        <h2 class="items-center font-semibold text-xl text-gray-800 leading-tight" style="color: #ffffff; font-size: 1.75rem;background-color:#208562">
            {{ __("Chats") }}
        </h2>
    </x-slot>
    <style>
.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 800px;
    overflow-y: scroll
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}

    </style>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <main class="content">
                        <div class="container1 p-0">
                            {{-- <div>
                                <h1 class="h3 mb-3" style="justify-items: center; text-align:center">New Chat</h1>
                                <a href="{{route('new-chat')}}">
                                    <button type="submit" style="position: fixed; bottom: 10px; right: 10px; padding: 10px; background-color: #17c774; color: #fff; border: 2px solid; border-radius: 5px; cursor: pointer;">New Chat</button>
                                </a>
                            </div> --}}
                            <div class="card">
                                {{-- <div class="row g-0"> --}}
                                    {{-- <div class="col-12 col-lg-5 col-xl-3 border-right"> --}}
                    
                                        {{-- <div class="px-4 d-none d-md-block">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <input type="text" class="form-control my-3" placeholder="Search...">
                                                </div>
                                            </div>
                                        </div> --}}
                                        
                                        {{-- @foreach ($contacts as $contact)
                                        <div class="list-group-item list-group-item-action border-0">
                                            <div class="badge bg-success float-right">5</div>
                                            <div class="d-flex align-items-start">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40
                                                " height="40">
                                                <div class="flex-grow-1 ml-3">
                                                    {{$contact->is_contact->name}}
                                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                                </div>
                                                <button type="submit" style="color: white; border: none; background-color: #17c774; font-size:1rem; padding: 8px 16px; border-radius: 4px; cursor: pointer;">
                                                    <a href="{{route('/chats/section/'.$contact->user_id_2)}}">
                                                    <strong>Open</strong>
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach --}}

                                    {{--
                                        <a href="#" class="list-group-item list-group-item-action border-0">
                                            <div class="badge bg-success float-right">5</div>
                                            <div class="d-flex align-items-start">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40
                                                " height="40">
                                                <div class="flex-grow-1 ml-3">
                                                    Vanessa Tucker
                                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                                </div>
                                            </div>
                                        </a>
                                    --}}
                                        
                                    {{-- <hr class="d-block d-lg-none mt-1 mb-0">
                                </div> --}}

                                {{-- @foreach ($chats as $chat) --}}
                                    <div class="col-12 col-lg-7 col-xl-9" style="width: 100%">
                                        <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                            <div class="d-flex align-items-center py-1">
                                                <div class="position-relative">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                                </div>
                                                <div class="flex-grow-1 pl-3">
                                                    <strong>Sharon Lessman</strong>
                                                    <div class="text-muted small"><em>Typing...</em></div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
                                                    <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
                                                    <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                                                </div>
                                            </div>
                                        </div>
                        
                                            <div class="position-relative">
                                                <div class="chat-messages p-4">
                        
                                                    <div class="chat-message-right pb-4">
                                                        <div>
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                                            <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                                        </div>
                                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                            <div class="font-weight-bold mb-1">You</div>
                                                            Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                                        </div>
                                                    </div>
                        
                                                    <div class="chat-message-left pb-4">
                                                        <div>
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                                            <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                                        </div>
                                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                            <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                            Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                        </div>
                                                    </div>
                        
                                                    <div class="chat-message-right mb-4">
                                                        <div>
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                                            <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                                        </div>
                                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                            <div class="font-weight-bold mb-1">You</div>
                                                            Cum ea graeci tractatos.
                                                        </div>
                                                    </div>
                        
                                                    <div class="chat-message-left pb-4">
                                                        <div>
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                                            <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                                        </div>
                                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                            <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                            Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit.
                                                            Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="flex-grow-0 py-3 px-4 border-top">
                                                <div class="input-group">
                                                    <form action="" method="post" enctype="multipart/form-data" style="width: 100%;">
                                                        @csrf
                                                        <input type="text" class="form-control" placeholder="Type your message" style=" margin-bottom: 5px ">
                                                        <button class="btn btn-primary">Send</button>
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                    {{-- @endforeach --}}
                                {{-- </d/iv> --}}
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>