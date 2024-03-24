<div class="w-full h-full p-10 flex justify-between flex-wrap">
    <!-- Start First Card -->   
        <div class="flex flex-col w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-1" id="card-1">
            <div class="flex items-end mr-3 justify-end">
                <button
                    id="dropdown-button"
                    class="relative mt-3 bg-gray-400 text-black w-8 h-8 rounded-full">
                    <i class="fa-solid fa-ellipsis-vertical"></i>

                    <!-- Start The Drop Down Menu -->
                    <div
                        id="dropdown-menu"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none opacity-0 invisible"
                        aria-orientation="vertical"
                        tabindex="-1">
                        <a
                            onclick="showFileInput()"
                            class="block px-4 py-2 text-sm text-gray-700"
                            role="menuitem"
                            tabindex="-1"
                            id="user-menu-item-0"
                            ><i class="fa-solid fa-image mr-3"></i> Change Cover
                        </a>
                        <a
                            onclick="editableBtn()"
                            class="block px-4 py-2 text-sm text-gray-700"
                            role="menuitem"
                            tabindex="-1"
                            id="user-menu-item-2"
                            > <i class="fa-solid fa-pen mr-3"></i> Rename
                        </a>
                    </div>
                    <!-- End The Drop Down Menu -->
                </button>

            </div>
            <div class="min-w-1/2 ml-4 pt-4 overflow-hidden">
                <h1 id="editableH1" class="font-extrabold text-5xl text-white overflow-hidden" id="main-title">
                Start Journaling Now
                </h1>
            </div>

            <div class="mt-3">
            @include('../components/button')
            </div>

            <!-- Start Change Background Buttons -->
            <div
                class="flex hidden flex-col my-auto items-center justify-between content-between gap-5 max-w-full"
                id="file_input">
                <div>
                    @include('../components/file_input')
                </div>

                <button
                    onclick="annuler()"
                    style="border-radius: 5px"
                    class="w-[157px] h-[45px] bg-white text-black text">
                    Annuler
                </button>
            </div>
            <!-- End Change Background Buttons -->
        </div>
    <!-- End First Card -->

        <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-2">
        <!-- <h1 id="editableH1" class="editable-h1">Click to edit this heading</h1> -->

        </div>
    <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-3"></div>

    <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-4"></div>
    <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-5"></div>
    <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-6"></div>

    <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-7"></div>
    <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-8"></div>
    <div class="w-full mb-7 xl:mb-0 xl:w-[31%] h-72 rounded-xl card-9"></div>
</div>

<script>
    // Show the Drop Down Menu
    const dropdownButton = document.getElementById("dropdown-button");
    const dropdownMenu = document.getElementById("dropdown-menu");
    dropdownButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("opacity-0");
        dropdownMenu.classList.toggle("invisible");
    });

    // Show Change Background Input's
    function showFileInput() {
        const dropdown_button = document.getElementById("dropdown-button");
        const file_input = document.getElementById("file_input");
        const main_title = document.getElementById("editableH1");

        file_input.classList.toggle("hidden");
        dropdown_button.classList.add("hidden");
        main_title.classList.add("hidden");
    }

    // Annuler Changing Background
    function annuler() {
        const dropdown_button = document.getElementById("dropdown-button");
        const file_input = document.getElementById("file_input");
        const main_title = document.getElementById("editableH1");

        file_input.classList.add("hidden");
        dropdown_button.classList.remove("hidden");
        main_title.classList.remove("hidden");
    }
</script>

<script>
    // Get the editable h1 element
    const editableH1 = document.getElementById('editableH1');

    // Add event listener to the h1 element
    function editableBtn() {
        // Change the element to be editable
        editableH1.contentEditable = true;
        editableH1.focus();
        editableH1.style.border = "1px solid #000";
        editableH1.style.padding = "5px";
        editableH1.style.cursor = "text";
    };

    // Add event listener to save the changes when user clicks outside the h1
    editableH1.addEventListener('blur', function() {
        // Change the element back to non-editable
        editableH1.contentEditable = false;
        editableH1.style.border = "none";
    });
</script>