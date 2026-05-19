<?= LoadPartial('head') ?>
<?= LoadPartial('navbar') ?>
<?= LoadPartial('top-banner') ?>

<!-- Job Listings with Sidebar Layout -->
<section class="py-12">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
            
            <!-- Left Sidebar - Filters/Categories -->
            <aside class="lg:col-span-1">
                <div class="space-y-6">
                    <!-- Filter Block 1 -->
                    <div class="bg-gray-300 h-32 rounded-lg"></div>
                    
                    <!-- Filter Block 2 -->
                    <div class="bg-gray-300 h-28 rounded-lg"></div>
                    
                    <!-- Filter Block 3 -->
                    <div class="bg-gray-300 h-24 rounded-lg"></div>
                </div>
            </aside>
            
            <!-- Main Content - Job Listings -->
            <div class="lg:col-span-4">
                <h2 class="text-3xl font-bold mb-8 text-center">All Jobs</h2>
                <div class="space-y-10">
                    
                    <!-- Job Listing 1: Software Engineer -->
                    <div class="bg-white rounded-lg shadow-md p-8 flex gap-6 mb-10">
                        <!-- Avatar -->
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gray-400 rounded-full"></div>
                        </div>
                        
                        <!-- Job Info -->
                        <div class="flex-grow">
                            <div class="flex items-start justify-between py-4">
                                <div class="flex items-center gap-4">
                                    <h3 class="text-2xl font-bold text-gray-800 ">Software Engineer</h3>
                                    <p class="text-gray-600 mt-1 border-b pb-2">Tech Company Inc.</p>
                                </div>
                            </div>
                            
                            <p class="text-gray-700 mt-3">
                                We are seeking a skilled software engineer to develop
                                high-quality software solutions.
                            </p>
                            
                            <ul class="mt-4 space-y-2 text-gray-700 p-4">
                                <li><strong>Salary:</strong> $80,000</li>
                                <li><strong>Location:</strong> New York <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span></li>
                                <li><strong>Tags:</strong> <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded text-xs">Development</span> <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded text-xs">Coding</span></li>
                            </ul>
                            
                            <a href="/listings/show.html" class="inline-block mt-4 px-6 py-2 bg-indigo-100 text-indigo-700 rounded-lg font-medium hover:bg-indigo-200 transition">
                                View Details
                            </a>
                        </div>
                    </div>
                    
                    <!-- Job Listing 2: Product Manager -->
                    <div class="bg-white rounded-lg shadow-md p-8 flex gap-6">
                        <!-- Avatar -->
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gray-400 rounded-full"></div>
                        </div>
                        
                        <!-- Job Info -->
                        <div class="flex-grow">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-800">Product Manager</h3>
                                    <p class="text-gray-600 mt-1 border-b pb-2">StartUp Solutions LLC</p>
                                </div>
                            </div>
                            
                            <p class="text-gray-700 mt-3">
                                Looking for an experienced product manager to lead our
                                product strategy and development roadmap.
                            </p>
                            
                            <ul class="mt-4 space-y-2 text-gray-700 p-4">
                                <li><strong>Salary:</strong> $95,000</li>
                                <li><strong>Location:</strong> San Francisco <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span></li>
                                <li><strong>Tags:</strong> <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded text-xs">Management</span> <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded text-xs">Product</span></li>
                            </ul>
                            
                            <a href="/listings/show.html" class="inline-block mt-4 px-6 py-2 bg-indigo-100 text-indigo-700 rounded-lg font-medium hover:bg-indigo-200 transition">
                                View Details
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>

<?= LoadPartial('bottom-banner') ?>
<?= LoadPartial('footer') ?>