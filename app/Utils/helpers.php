<?php
function setActiveCssClass ($routeName) {
    return request()->routeIs($routeName) ? 'active' : '';
}
