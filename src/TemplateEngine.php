<?php
namespace Docly;

class TemplateEngine {
    public static function render(string $template, array $data): string {
        foreach ($data as $key => $value) {
            $template = str_replace('{{' . $key . '}}', htmlspecialchars($value), $template);
        }
        return $template;
    }
}
