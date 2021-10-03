<x-app-layout>

    <div class="bg-white">

        <div class="bg-gray-100 m-0 p-0">

            <!-- chapchar area -->
            <div class="h-screen bg-gray-50 fixed overflow-y-hidden w-80 top-0 bottom-0 shadow-xl pl-8 pr-8 text-gray-500">

                <div class="border-b border-gray-300 pb-8">
                    <div class="left-memo-menu d-flex justify-content-between pt-2">
                        <div class="pt-8 pb-3 text-gray-700 text-xl">
                            The Story of Lomen .
                        </div>
                        <div class="pr-1">
                            <a href="" class="btn btn-success"><i class="fas fa-plus"></i></a>
                            <a href="#" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </div>
                    <div class="text-sm text-gray-500">
                        Memo list .
                    </div>
                </div>

                <div class="left-memo-list list-group-flush p-0 pt-4 pb-4 border-b border-gray-300">
                    <a href="" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-gray-600 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, error minima tempora numquam placeat.</h5>
                            <small class="text-gray-500">2020/08/01 12:00</small>
                        </div>
                    </a>
                </div>

                <div class="left-memo-list list-group-flush p-0 pt-4 pb-4 border-b border-gray-300">
                    <a href="" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-gray-600 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, error minima tempora numquam placeat.</h5>
                            <small class="text-gray-500">2020/08/01 12:00</small>
                        </div>
                    </a>
                </div>

                <div class="left-memo-list list-group-flush p-0 pt-4 pb-4 border-b border-gray-300">
                    <a href="" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-gray-600 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, error minima tempora numquam placeat.</h5>
                            <small class="text-gray-500">2020/08/01 12:00</small>
                        </div>
                    </a>
                </div>

            </div>

            <!-- editor area -->
            <div class="lg:ml-80">
                <div class="p-20" data-editorFrame="">
                    {{-- <form class="w-100 h-100" method="post">
                        <input type="hidden" name="edit_id" value="" />
                        <div id="memo-menu">
                            <button type="button" class="btn btn-danger" formaction=""><i class="fas fa-trash-alt"></i></button>
                            <button type="button" class="btn btn-success" formaction=""><i class="fas fa-save"></i></button>
                        </div>
                        <input type="text" id="memo-title" name="edit_title" placeholder="タイトルを入力する..." value="" />
                        <textarea id="memo-content" name="edit_content" placeholder="内容を入力する..."></textarea>
                    </form> --}}
                    <div class="element bg-gray-50 border-2 border-indigo-300">
                    </div>
                    <script type="module">
                        import { Editor } from 'https://cdn.skypack.dev/@tiptap/core?min'
                        import StarterKit from 'https://cdn.skypack.dev/@tiptap/starter-kit?min'
                    const editor = new Editor({
                        element: document.querySelector('.element'),
                        extensions: [
                            StarterKit,
                        ],
                        content: ``,
                    });
                </script>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>