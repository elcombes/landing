---

# 🚗 Martin Co – Landing de Captación de Leads

Landing page optimizada para captación de leads de Plan de Ahorro Fiat y Peugeot en Mendoza.

Diseñada para campañas de Meta Ads y tráfico directo, con foco en:

* Alta conversión
* Validación avanzada en frontend
* Experiencia UX premium
* Protección anti-bot
* Envío vía API a backend externo

---

## 📌 Objetivo del Proyecto

Captar potenciales clientes interesados en:

- Planes de ahorro
- 0km Fiat y Peugeot
- Financiación personalizada

Y enviar los datos de manera estructurada al endpoint:

```
https://api.martinco.com.ar/lead/
```

---

## 🧱 Estructura del Proyecto

Proyecto estático compuesto por:

```
/
├── index.html
├── ogg.jpg
├── favicon.ico
├── logo-peugeot-blanco.png
├── logo-fiat-blanco.png
├── logo-mendoza-shopping_blanco.png
├── autos.png
├── hace-el-cambio.png
└── martin-co-logo-negro.png
```

No requiere backend propio.

---

## 🎨 Diseño

- Bootstrap 5
- Tipografía Montserrat
- Diseño responsive
- Fondo diagonal corporativo
- Branding oficial Fiat / Peugeot

---

## ⚙️ Funcionalidades del Formulario

### ✅ Validaciones Avanzadas

- Nombre y Apellido → solo letras
- Email → validación HTML5
- WhatsApp → validación real Argentina
- Modelo → letras y números
- Todos los campos obligatorios

---

### 📱 WhatsApp Argentina

Validación inteligente:

- 10 dígitos sin prefijo
- 13 dígitos con 549
- Autogenera `+549` si el usuario no lo coloca

---

### ✨ UX Premium

- Validación en tiempo real
- Animación suave al validar
- Indicador visual ✔ “Perfecto”
- Barra de progreso dinámica
- Loader al enviar
- SweetAlert2 para mensajes elegantes

---

### 🛡 Protección Anti-Bot

Implementado:

- Honeypot invisible
- Tiempo mínimo de envío (anti bots rápidos)
- Validación estricta antes de enviar

No utiliza reCAPTCHA (sin fricción para el usuario).

---

## 📦 Payload Enviado

```json
{
  "first_name": "",
  "last_name": "",
  "phone": "",
  "email": "",
  "details": "{\"tiene_auto\":\"si\",\"modelo_actual\":\"2020 Cronos\"}"
}
```

`details` se envía como JSON stringificado.

---

## 🌎 SEO & IA Friendly

Incluye:

- Meta tags optimizados
- Open Graph
- Keywords locales (Mendoza)
- Responsive
- Estructura semántica clara
- Datos preparados para consumo por IA

---

## 🚀 Cómo Usar

1. Clonar repositorio
2. Subir a hosting
3. Configurar dominio:

   ```
   formulario.martinco.com.ar
   ```

4. Verificar que el endpoint API esté activo

---

## 🔐 Seguridad Recomendada (Backend)

Se recomienda que el endpoint valide:

- Honeypot vacío
- Rate limiting por IP
- Validación de estructura JSON
- Sanitización de datos

---

## 📊 Pensado para Campañas

Optimizado para:

- Meta Ads
- Google Ads
- Tráfico directo
- Remarketing

Enfocado en:

- Conversión rápida
- Baja fricción
- Experiencia profesional

---

## 👨‍💻 Stack Tecnológico

- HTML5
- CSS3
- Bootstrap 5
- Vanilla JavaScript
- SweetAlert2
- Fetch API

---

## 🏢 Proyecto

Desarrollado para:

**Martin Co – Mendoza, Argentina**
