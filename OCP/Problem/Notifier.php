<?php
class Notifier {
    public function sendNotification($type, $data) {
        if ($type === 'email') {
        } elseif ($type === 'sms') {
        } else {
            throw new Exception('Invalid notification type');
        }
    }
}