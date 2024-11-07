<div class=" p-0 mx-auto card content" x-data="{ showList: false }">
    <div class="p-6 text-center border-b" x-data="timer(when.getTime())" x-init="init()">
        <h1 class="mb-0">👋 &nbsp; Welcome to the Statamic Demo site!</h1>
        <p>
            Go bananas with it because it will reset in:
            <span class="inline-block px-sm bg-yellow dark:bg-dark-500">
                <span x-text="time().minutes"></span>:<span x-text="time().seconds"></span>
            </span>
        </p>
    </div>
    <div class="p-6 grid lg:grid-cols-2">
        <a href="{{ cp_route('collections.show', 'news') }}"
           class="flex items-start p-2 mb-8 rounded-md hover:bg-blue-100 group">
            <div
                class="flex items-center justify-center w-12 h-12 p-2 mr-3 text-blue-900 bg-blue-100 rounded-full dark:bg-dark-900 group-hover:bg-blue-200">
                <svg viewBox="0 0 32 32" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                    <g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)">
                        <path d="M10.932,18.5a5,5,0,0,1-10,0V3.5a3,3,0,0,1,3-3h4a3,3,0,0,1,3,3Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.193,21.116,17.9,8.165a3,3,0,0,0-1.045-4.112L13.416,2.008a3,3,0,0,0-2.927-.078"
                              fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M10.932,10.1v8.4a5,5,0,0,1-2.55,4.359L21.5,15.736A3,3,0,0,0,22.7,11.668L20.8,8.153A3,3,0,0,0,18.32,6.588"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.932 3.500 L8.932 3.500 L8.932 6.500 L2.932 6.500 Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.932 8.500 L8.932 8.500 L8.932 11.500 L2.932 11.500 Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.932 13.500 L8.932 13.500 L8.932 16.500 L2.932 16.500 Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M5.932,19.749a.25.25,0,1,1-.25.25.25.25,0,0,1,.25-.25" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Manage News</h2>
                <p>Publish and edit news articles using <em>Bard</em>, our wonderful rich text editor.</p>
            </div>
        </a>
        <a href="{{ cp_route('collections.show', 'pages') }}"
           class="flex items-start p-2 mb-8 rounded-md hover:bg-blue-100 group">
            <div
                class="flex items-center justify-center w-12 h-12 p-3 mr-3 text-blue-900 bg-blue-100 rounded-full dark:bg-dark-900 group-hover:bg-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <g>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M3.5 4.50635V8c0 3.4375 1.40625 4.0063 3 4.0063" stroke-width="1"></path>
                        <path id="Vector 2265" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M3.5 7.00635h3" stroke-width="1"></path>
                        <path id="Intersect" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M3.63685 0.5c-0.63537 0 -1.2355 0.023698 -1.77636 0.079235C1.29418 0.637385 0.759973 0.975173 0.608186 1.52385 0.535203 1.78767 0.5 2.08828 0.5 2.50001c0 0.41174 0.035203 0.71235 0.108186 0.97617 0.151787 0.54868 0.685994 0.88646 1.252304 0.94461 0.54085 0.05552 1.14098 0.07921 1.77634 0.07921 0.63536 0 1.23545 -0.02369 1.77627 -0.07923 0.56631 -0.05815 1.10052 -0.39594 1.2523 -0.94461 0.07299 -0.26383 0.10819 -0.56444 0.10819 -0.97617 0 -0.41171 -0.03517 -0.71231 -0.10813 -0.97612C6.51373 0.975177 5.97952 0.637385 5.41321 0.579235 4.87235 0.523698 4.27221 0.5 3.63685 0.5Z"
                              stroke-width="1"></path>
                        <path id="Intersect_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M10.0001 5.46436c-0.79912 0 -1.54826 0.02321 -2.20904 0.07863 -0.49075 0.04116 -0.99581 0.26362 -1.17491 0.72236C6.53781 6.466 6.5 6.69501 6.5 7.00649c0 0.31148 0.03781 0.54049 0.11615 0.74114 0.1791 0.45875 0.68416 0.6812 1.17491 0.72236 0.66077 0.05541 1.4099 0.07861 2.20894 0.07861 0.7991 0 1.5482 -0.02321 2.2089 -0.07863 0.4908 -0.04116 0.9958 -0.26361 1.1749 -0.72235 0.0784 -0.20066 0.1162 -0.42966 0.1162 -0.74115 0 -0.31146 -0.0378 -0.54045 -0.1161 -0.74109 -0.179 -0.45877 -0.6841 -0.68123 -1.1748 -0.72239 -0.6608 -0.05542 -1.41 -0.07863 -2.209 -0.07863Z"
                              stroke-width="1"></path>
                        <path id="Intersect_3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M10.0001 10.4158c-0.79912 0 -1.54826 0.0232 -2.20904 0.0786 -0.49075 0.0412 -0.99581 0.2636 -1.17491 0.7224 -0.07834 0.2006 -0.11615 0.4296 -0.11615 0.7411s0.03781 0.5405 0.11615 0.7411c0.1791 0.4588 0.68416 0.6812 1.17491 0.7224 0.66077 0.0554 1.4099 0.0786 2.20894 0.0786 0.7991 0 1.5482 -0.0232 2.2089 -0.0786 0.4908 -0.0412 0.9958 -0.2636 1.1749 -0.7224 0.0784 -0.2006 0.1162 -0.4296 0.1162 -0.7411s-0.0378 -0.5405 -0.1161 -0.7411c-0.179 -0.4588 -0.6841 -0.6812 -1.1748 -0.7224 -0.6608 -0.0554 -1.41 -0.0786 -2.209 -0.0786Z"
                              stroke-width="1"></path>
                    </g>
                </svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Manage Pages</h2>
                <p>Add, edit, delete, and rearrange the site's pages.</p>
            </div>
        </a>
        <a href="{{ cp_route('assets.browse.index', 'assets') }}"
           class="flex items-start p-2 mb-8 rounded-md hover:bg-blue-100 group">
            <div
                class="flex items-center justify-center w-12 h-12 p-3 mr-3 text-blue-900 bg-blue-100 rounded-full dark:bg-dark-900 group-hover:bg-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <g>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M5.31308 10.994c-0.91043 -0.0243 -1.80286 -0.1196 -2.67175 -0.2196C1.63337 10.6585 0.82599 9.85145 0.714203 8.84303 0.603078 7.84056 0.5 6.8067 0.5 5.75c0 -1.0567 0.103078 -2.09057 0.214203 -3.09302C0.825989 1.64855 1.63337 0.841471 2.64133 0.725553 3.64879 0.609691 4.68789 0.5 5.75 0.5s2.10121 0.109691 3.10867 0.225553C9.86663 0.841472 10.674 1.64855 10.7858 2.65698 10.8969 3.65944 11 4.6933 11 5.75c0 0.18814 -0.0033 0.37556 -0.0093 0.5622"
                              stroke-width="1"></path>
                        <path id="Vector" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M7.68409 5.28778c0.79579 0 1.24343 -0.44763 1.24343 -1.24341 0 -0.79579 -0.44764 -1.24342 -1.24343 -1.24342 -0.79578 0 -1.24342 0.44763 -1.24342 1.24342 0 0.79578 0.44764 1.24341 1.24342 1.24341Z"
                              stroke-width="1"></path>
                        <path id="Vector 392" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M10.5 8.5c-2 0 -3 2 -3 2.5s1 2.5 3 2.5 3 -2 3 -2.5 -1 -2.5 -3 -2.5Z"
                              stroke-width="1"></path>
                        <path id="Union" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M10.4988 11.375c-0.24 0 -0.375 -0.135 -0.375 -0.375s0.135 -0.375 0.375 -0.375"
                              stroke-width="1"></path>
                        <path id="Union_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M10.5012 11.375c0.24 0 0.375 -0.135 0.375 -0.375s-0.135 -0.375 -0.375 -0.375"
                              stroke-width="1"></path>
                        <path id="Subtract_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              d="M6.67122 8.10479c-0.92488 -1.36437 -2.09344 -2.54067 -3.29354 -2.54067 -0.99657 0 -1.97138 0.81113 -2.802973 1.86753 0.038564 0.47662 0.088277 0.94736 0.139714 1.41137 0.111787 1.00843 0.919169 1.81548 1.927129 1.93138 0.85861 0.0988 1.77171 0.1999 2.67095 0.2256"
                              stroke-width="1"></path>
                    </g>
                </svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Check out the Asset Manager</h2>
                <p>Get a feel what what it's like to upload and manage images, files, and directories.</p>
            </div>
        </a>
        <a href="/" class="flex items-start p-2 mb-8 rounded-md hover:bg-blue-100 group">
            <div
                class="flex items-center justify-center w-12 h-12 p-2 mr-3 text-blue-900 bg-blue-100 rounded-full dark:bg-dark-900 group-hover:bg-blue-200">
                <svg viewBox="0 0 32 32" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                    <g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)">
                        <path d="M10.932,18.5a5,5,0,0,1-10,0V3.5a3,3,0,0,1,3-3h4a3,3,0,0,1,3,3Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.193,21.116,17.9,8.165a3,3,0,0,0-1.045-4.112L13.416,2.008a3,3,0,0,0-2.927-.078"
                              fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M10.932,10.1v8.4a5,5,0,0,1-2.55,4.359L21.5,15.736A3,3,0,0,0,22.7,11.668L20.8,8.153A3,3,0,0,0,18.32,6.588"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.932 3.500 L8.932 3.500 L8.932 6.500 L2.932 6.500 Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.932 8.500 L8.932 8.500 L8.932 11.500 L2.932 11.500 Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.932 13.500 L8.932 13.500 L8.932 16.500 L2.932 16.500 Z" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M5.932,19.749a.25.25,0,1,1-.25.25.25.25,0,0,1,.25-.25" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">View the Front-end</h2>
                <p>Take a look at the front-end of the site to see how your Control Panel edits have affected it.</p>
            </div>
        </a>
    </div>
</div>

<script>
    var when = new Date();
    when.setMinutes(Math.ceil(when.getMinutes() / 30) * 30);

    function timer(expiry) {
        return {
            expiry: expiry,
            remaining:null,
            init() {
                this.setRemaining()
                setInterval(() => {
                    this.setRemaining();
                }, 1000);
            },
            setRemaining() {
                const diff = this.expiry - new Date().getTime();
                this.remaining = parseInt(diff / 1000);
            },
            days() {
                return {
                    value:this.remaining / 86400,
                    remaining:this.remaining % 86400
                };
            },
            hours() {
                return {
                    value:this.days().remaining / 3600,
                    remaining:this.days().remaining % 3600
                };
            },
            minutes() {
                return {
                    value:this.hours().remaining / 60,
                    remaining:this.hours().remaining % 60
                };
            },
            seconds() {
                return {
                    value:this.minutes().remaining,
                };
            },
            format(value) {
                return ("0" + parseInt(value)).slice(-2)
            },
            time(){
                return {
                    days:this.format(this.days().value),
                    hours:this.format(this.hours().value),
                    minutes:this.format(this.minutes().value),
                    seconds:this.format(this.seconds().value),
                }
            },
        }
    }
</script>
