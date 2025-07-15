# Conversor de Números a Texto

Esta aplicación PHP convierte valores numéricos en su representación textual en español, incluyendo el formato monetario en EUROS y CÉNTIMOS.

---

## 🧠 Características

- Soporte para números grandes: miles, millones y miles de millones.
- Conversión completa con parte decimal (hasta dos cifras).
- Representación monetaria: EUROS y CÉNTIMOS.
- Validación del número introducido (formato: `1234.56`).
- Interfaz responsiva basada en Bootstrap 5.
- Separación clara de lógica (PHP), estilos (CSS) y validación (JS).

---

## 🚀 Cómo usar

1. Clona este repositorio:
   ```
   git clone https://github.com/tuusuario/conversor-numeros-a-texto.git
   cd conversor-numeros-a-texto
    ```
2. Ejecuta el proyecto en tu servidor local (por ejemplo: Laragon, XAMPP, MAMP...).

3. Accede en tu navegador a:
```
 http://localhost/conversor-numeros-a-texto/index.php
 ```
4. Introduce un número (ej: 40650.75) y pulsa Convertir para ver su forma en texto.



✅ Requisitos

PHP 7.4 o superior

Servidor local compatible (Apache, Nginx, etc.)


📂 Estructura del proyecto


conversor-numeros-a-texto/
├── conversor/
│   └── conversor.php        # Funciones de conversión numérica
├── css/
│   └── style.css            # Estilos personalizados
├── js/
│   └── main.js              # Validación del formulario
├── img/
│   └── preview.png          # Captura de la interfaz
├── index.php                # Página principal con formulario
└── README.md


📄 Licencia

Este proyecto se distribuye bajo la licencia MIT. Puedes usarlo, modificarlo y distribuirlo libremente.