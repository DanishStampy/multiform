<div class="my-4">
    <form wire:submit.prevent="register">
        @if($currentSteps == 1)
        <div class="step-one">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    STEP 1/4 - Personal Details
                </div>
                <div class="flex-auto p-6">
                    <div class="flex flex-wrap">
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="first_name">First Name</label>
                                <input type="text"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 "
                                    placeholder="Enter first name" wire:model='first_name'>
                                    <span class="text-red-500">@error('first_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="last_name">Last Name</label>
                                <input type="text"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 "
                                    placeholder="Enter last name" wire:model='last_name'>
                                    <span class="text-red-500">@error('last_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="">Gender</label>
                                <select
                                    wire:model='gender'
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 ">
                                    <option value="" selected>Choose gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="text-red-500">@error('gender'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="">Age</label>
                                <input
                                    wire:model='age'
                                    type="number"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 "
                                    placeholder="Enter your age">
                                    <span class="text-red-500">@error('age'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 px-4">
                        <label for="description">Description</label>
                        <textarea
                            wire:model='description'
                            name="description"
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 "
                            id="" rows="5"></textarea>
                            <span class="text-red-500">@error('description'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
        </div>


        @elseif($currentSteps == 2)
        <div class="step-two">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    STEP 2/4 - Address & Contacts
                </div>
                <div class="flex-auto p-6">
                    <div class="flex flex-wrap">
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="email">Email Address</label>
                                <input
                                    wire:model='email'
                                    type="text"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 "
                                    placeholder="Enter email address">
                                    <span class="text-red-500">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="phone">Phone Number</label>
                                <input
                                    wire:model='phone'
                                    type="text"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 "
                                    placeholder="Enter phone number">
                                    <span class="text-red-500">@error('phone'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="">Country of Residence</label>
                                <select
                                    wire:model='country'
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 ">
                                    <option value="" selected>Select Country</option>
                                    <option value="USA">USA</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Canada">Canada</option>
                                </select>
                                <span class="text-red-500">@error('country'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-4">
                            <div class="mb-4">
                                <label for="">City</label>
                                <input
                                    wire:model='city'
                                    type="text"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded focus:outline-gray-400 "
                                    placeholder="Enter city">
                                    <span class="text-red-500">@error('city'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @elseif($currentSteps == 3)
        <div class="step-three">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    STEP 3/4 - Frameworks Experience
                </div>
                <div class="flex-auto p-6">
                    <div class="flex flex-wrap">
                        <div class="px-4">
                            Writing code is complex. And writing code that others can understand and manage is even more
                            difficult because you must deal with syntax, declarations, performance, staying consistent,
                            and other issues.

                            Software frameworks provide a template in which almost all general tasks have been handled.
                            This allows you to focus on the core software development rather than the details of the
                            process. Given that there is a set structure, it is simple to collaborate with others.
                            <div class="frameworks flex flex-col align-items-left mt-2">
                                <label for="laravel">
                                    <input type="checkbox" id="laravel" value="laravel" wire:model='frameworks'>
                                    Laravel
                                </label>
                                <label for="vuejs">
                                    <input type="checkbox" id="vuejs" value="vuejs" wire:model='frameworks'>
                                    Vue Js
                                </label>
                                <label for="reactjs">
                                    <input type="checkbox" id="reactjs" value="reactjs" wire:model='frameworks'>
                                    React Js
                                </label>
                                <label for="angularjs">
                                    <input type="checkbox" id="angularjs" value="angularjs" wire:model='frameworks'>
                                    Angular Js
                                </label>
                                <label for="django">
                                    <input type="checkbox" id="django" value="django" wire:model='frameworks'>
                                    Django
                                </label>
                                <label for="flask">
                                    <input type="checkbox" id="flask" value="flask" wire:model='frameworks'>
                                    Flask
                                </label>
                            </div>
                            <span class="text-red-500">@error('frameworks'){{ $message }}@enderror</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @elseif($currentSteps == 4)
        <div class="step-four">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    STEP 4/4 - Attachments
                </div>
                <div class="flex-auto p-6">
                    <div class="flex flex-wrap">
                        <div class="px-4">
                            Writing code is complex. And writing code that others can understand and manage is even more
                            difficult because you must deal with syntax, declarations, performance, staying consistent,
                            and other issues.

                            <div class="my-4">
                                <label for="cv">CV</label>
                                <input
                                    wire:model='cv'
                                    type="file"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded">
                                    <span class="text-red-500">@error('cv'){{ $message }}@enderror</span>
                            </div>
                            <div class="mb-4">
                                <label for="terms" class="block">
                                    <input wire:model='terms' type="checkbox" id="terms">
                                    You must agree with our <a href="#">Terms and Condition</a>
                                </label>
                                <span class="text-red-500">@error('terms'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif

        <div class="action-buttons flex justify-between bg-white py-2 my-2 px-2">

            @if($currentSteps == 1)
                <div></div>
            @endif

            @if($currentSteps > 1 && $currentSteps <= 4)
                <button wire:click='minusStep' type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-md  bg-gray-600 text-white hover:bg-gray-700">Back</button>
            @endif

            @if($currentSteps == 4)
                <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-md  bg-indigo-600 text-white hover:bg-indigo-700">Submit</button>
            @endif

            @if($currentSteps != 4)
                <button wire:click='addStep' type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-md  bg-green-600 text-white hover:bg-green-700">Next</button>
            @endif


        </div>
    </form>
</div>
