<?php
class EmailNotifier implements Notifier {
    public function send(array $data): void {
        mail($data['to'], $data['subject'], $data['body']);
    }
}
