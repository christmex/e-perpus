{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('item-location') }}"><i class="nav-icon la la-question"></i> Item locations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product-category') }}"><i class="nav-icon la la-question"></i> Product categories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product-variation') }}"><i class="nav-icon la la-question"></i> Product variations</a></li>