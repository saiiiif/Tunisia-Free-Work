

<?php $count = Auth::guard('membre')->user()->newThreadsCount(); ?>
@if($count > 0)
    <span class="label label-danger">{{ $count }}</span>
@endif 


