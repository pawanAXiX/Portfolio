
<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.header')
</head>
<body class="font-sans antialiased">
<div class="min-h-screen flex flex-col">
    <!-- Split layout container -->
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Left content section -->
        <div  class="w-full md:w-2/3 p-8 md:p-16 flex bg-[#ADBBDA] flex-col justify-between">
            <!-- Include navbar component -->
            <x-layouts.navbar />

            <!-- Main content -->
            <div class="flex-grow flex flex-col justify-center">
                <livewire:main/>
            </div>
        </div>

        <!-- Right yellow section with profile image -->
        <div class="w-full md:w-1/3 text-black bg-[#EDE8F5] flex items-center justify-center relative">
            <div class="absolute top-8 right-8">
                <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-white shadow-md">
                    <img src="{{ asset('images/profile-photo.jpg') }}" alt="Shiyun Lu" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="absolute top-8 left-8 md:hidden flex items-center">
                <div class="h-0.5 w-12 bg-gray-400"></div>
                <span class="ml-2 text-gray-600 font-medium">shiyun lu</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
