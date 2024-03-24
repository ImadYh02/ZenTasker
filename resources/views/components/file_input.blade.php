<style>
    .Documents-btn {
        display: flex;
        align-items: center;
        /* justify-content: flex-start; */
        width: fit-content;
        height: 45px;
        border: none;
        padding: 0px 15px;
        border-radius: 5px;
        background-color: rgb(49, 49, 83);
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .folderContainer {
        width: 40px;
        height: fit-content;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        position: relative;
    }
    .fileBack {
        z-index: 1;
        width: 80%;
        height: auto;
    }
    .filePage {
        width: 50%;
        height: auto;
        position: absolute;
        z-index: 2;
        transition: all 0.3s ease-out;
    }
    .fileFront {
        width: 85%;
        height: auto;
        position: absolute;
        z-index: 3;
        opacity: 0.95;
        transform-origin: bottom;
        transition: all 0.3s ease-out;
    }
    .text {
        /* color: white; */
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .Documents-btn:hover .filePage {
        transform: translateY(-5px);
    }
    .Documents-btn:hover {
        background-color: rgb(58, 58, 94);
    }
    .Documents-btn:hover .fileFront {
        transform: rotateX(30deg);
    }
</style>

<label for="file-input" class="Documents-btn">
    <span class="folderContainer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 146 113" height="113" width="146" class="fileBack">
            <path fill="url(#paint0_linear_117_4)" d="M0 4C0 1.79086 1.79086 0 4 0H50.3802C51.8285 0 53.2056 0.627965 54.1553 1.72142L64.3303 13.4371C65.2799 14.5306 66.657 15.1585 68.1053 15.1585H141.509C143.718 15.1585 145.509 16.9494 145.509 19.1585V109C145.509 111.209 143.718 113 141.509 113H3.99999C1.79085 113 0 111.209 0 109V4Z"></path>
            <defs>
                <linearGradient gradientUnits="userSpaceOnUse" y2="95.4804" x2="72.93" y1="0" x1="0" id="paint0_linear_117_4">
                    <stop stop-color="#8F88C2"></stop>
                    <stop stop-color="#5C52A2" offset="1"></stop>
                </linearGradient>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 88 99" height="99" width="88" class="filePage"></svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 160 79" height="79" width="160" class="fileFront"></svg>
    </span>
    <p class="text text-white">Documents</p>
    <input id="file-input" type="file" class="hidden">
</label>

