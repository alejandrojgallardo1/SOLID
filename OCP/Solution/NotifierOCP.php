<?php
interface Notifier {
    public function send(array $data): void;
}
