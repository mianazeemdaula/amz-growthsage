<div>
    <div class="h3">Registraton Progress</div>
    <ul class="ml-3 text-sm mt-4">
        <li class="flex items-center space-x-3 step @if($step>0) done @endif">
            <i class="bi-1-circle"></i>
            <div>Profile completed</div>
            <i class="bi-check-lg"></i>
        </li>
        <li class="flex items-center space-x-3 mt-2 step @if($step>1) done @endif">
            <i class="bi-2-circle"></i>
            <div>Applied for regisration</div>
            <i class="bi-check-lg"></i>
        </li>
        <li class="flex items-center space-x-3 mt-2 step @if($step>2) done @endif">
            <i class="bi-3-circle"></i>
            <div>Fee Invoice Issued</div>
            <i class="bi-check-lg"></i>
        </li>
        <li class="flex items-center space-x-3 mt-2 step @if($step>3) done @endif">
            <i class="bi-4-circle"></i>
            <div>Payment confirmed </div>
            <i class="bi-check-lg"></i>
        </li>
        <li class="flex items-center space-x-3 mt-2 step @if($step>4) done @endif">
            <i class="bi-5-circle"></i>
            <div>Notification sent </div>
            <i class="bi-check-lg"></i>
        </li>

    </ul>
</div>