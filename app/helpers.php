<?php

function setActive($routeName) {
    return (request()->routeIs($routeName)) ? 'active' : '';
}

function returnBack() {
    return back();
}
