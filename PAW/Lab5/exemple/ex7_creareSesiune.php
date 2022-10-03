<?php
session_start();
echo session_id();
echo SID; // are acelasi efect ca instructiunea anterioara
session_write_close(); // permite inchiderea sesiunii in scriptul curent