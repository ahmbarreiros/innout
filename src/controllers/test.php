<?php
session_start();
requireValidSession(true);

// T E M P O R A R I O

print_r(getLastDayOfMonth('2019-02'));