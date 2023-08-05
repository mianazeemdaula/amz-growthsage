<div>
    <div class="flex items-center justify-between">
        <div class="h2">Amazon Product Hunting</div>
        <div class="flex justify-center items-center w-12 h-12 rounded-full bg-orange-100">
            <i class="bi bi-book text-orange-600"></i>
        </div>
    </div>
    <div class="divider mt-4"></div>
    <div class="mt-3 text-slate-600">
        We have 30+ years experience of transforming practical skills to beginners & professionals.
        Upon completion of this program, you will be well-versed with the tools, techniques, and strategies to identify
        profitable products, understand market trends, and make informed decisions to maximize your earnings.
    </div>
    <div class="w-full lg:w-3/4 mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex">
                <div class="w-12">
                    <i class="bi-clock"></i>
                </div>
                <div class="flex-col flex-1">
                    <div class="text-slate-500 text-sm">Duration</div>
                    <div class="text-sm font-bold">3 months</div>
                </div>
            </div>
            <div class="flex">
                <div class="w-12">
                    <i class="bi-calendar2"></i>
                </div>
                <div class="flex-col flex-1">
                    <div class="text-slate-500 text-sm">Lectures</div>
                    <div class="text-sm font-bold">{{ $course->lectures_count }}</div>
                </div>
            </div>
            <div class="flex">
                <div class="w-12">
                    <i class="bi-currency-dollar"></i>
                </div>
                <div class="flex-col flex-1">
                    <div class="text-slate-500 text-sm">Fee</div>
                    <div class="text-sm font-bold">{{ round($course->fee / 3, 0) }} / Month</div>
                </div>
            </div>
            <div class="flex">
                <div class="w-12">
                    <i class="bi-star"></i>
                </div>
                <div class="flex-col flex-1">
                    <div class="text-slate-500 text-sm">Rating</div>
                    <div class="text-sm font-bold">4.8</div>
                </div>
            </div>
        </div>
    </div>
</div>
