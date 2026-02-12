# 🚗 Martin Co – Landing de Captación de Leads

[![Hecho para Martin Co](https://img.shields.io/badge/Cliente-Martin%20Co-4b1098?style=flat-square)](https://martinco.com.ar)
[![Estado](https://img.shields.io/badge/status-producción-success?style=flat-square)](https://formulario.martinco.com.ar/)
[![Licencia](https://img.shields.io/badge/licencia-uso%20interno-blue?style=flat-square)]()

Landing page de alta conversión diseñada para la captación de leads de **Plan de Ahorro Fiat y Peugeot** en la región de **Mendoza**. Orientada a campañas de Meta Ads, Google Ads y tráfico directo, con foco absoluto en experiencia de usuario, validaciones inteligentes y envío estructurado a API.

---

## ✨ Vista Previa

![Preview](https://formulario.martinco.com.ar/ogg.jpg)

**URL:** [`https://formulario.martinco.com.ar/`](https://formulario.martinco.com.ar/)

---

## 🎯 Objetivo del Proyecto

Captar potenciales clientes interesados en:

- Planes de ahorro 0km (Fiat / Peugeot)
- Financiación personalizada
- Bonificaciones y promociones exclusivas

Los datos se estructuran y envían en tiempo real al endpoint corporativo para su inmediato procesamiento en CRM.

---

## 🧱 Stack Tecnológico

| Área            | Tecnologías                                                               |
| --------------- | ------------------------------------------------------------------------- |
| **Frontend**    | HTML5, CSS3, Bootstrap 5, JavaScript Vanilla, SweetAlert2                 |
| **Backend**     | PHP 8+ (proxy API), cURL                                                  |
| **UI/UX**       | Montserrat, diseño responsive, microinteracciones, feedback visual táctil |
| **Seguridad**   | Honeypot, time‑based validation, sanitización                             |
| **Integración** | Fetch API, JSON, Webhook Zapier → CRM externo                             |

---

## 👨‍💻 Equipo del Proyecto

| Rol                | Perfil                                                                                                          |
| ------------------ | --------------------------------------------------------------------------------------------------------------- |
| 🎨 Diseño Frontend | [**@elcombes**](https://github.com/elcombes) – UI/UX premium, validaciones avanzadas, experiencia de conversión |
| ⚙️ Backend & API   | [**@marcearce**](https://github.com/marcearce) – Proxy PHP, integración con webhook, sanitización de datos      |

---

## 📁 Estructura del Proyecto

```
/
├── index.html                     # Landing principal
├── api.php                        # Proxy backend (envío a Zapier)
├── README.md                      # Documentación
│
├── ogg.jpg                        # Open Graph / Vista previa
├── favicon.ico                    # Favicon corporativo
│
├── logo-peugeot-blanco.png
├── logo-fiat-blanco.png
├── logo-mendoza-shopping_blanco.png
├── martin-co-logo-negro.png
├── hace-el-cambio.png             # Título PNG
└── autos.png                      # Hero visual (Cronos + 208)
```

---

## ⚙️ Funcionalidades del Formulario

### ✅ Validaciones en Tiempo Real

- **Nombre / Apellido** → solo letras, capitalización automática
- **Email** → validación HTML5 + patrón
- **WhatsApp** → validación real para Argentina
  - 10 dígitos sin `549`
  - 13 dígitos con `549`
  - Se normaliza a `+549XXXXXXXXXX` antes del envío
- **Modelo** → solo letras y números
- **Select obligatorio** → no permite opción por defecto

### 🎨 UX Premium

- Feedback visual inmediato (✔ Perfecto)
- Animación suave `scale()` en campos válidos
- Barra de progreso dinámica que refleja el avance real
- Loader en botón durante envío
- Alertas elegantes con SweetAlert2
- Campo honeypot invisible anti‑bots
- Protección por tiempo mínimo de envío

---

## 📦 Estructura del Payload

```json
{
  "first_name": "Martín",
  "last_name": "Gómez",
  "phone": "+5492615123456",
  "email": "martin@ejemplo.com",
  "details": "{\"tiene_auto\":\"si\",\"modelo_actual\":\"2021 Peugeot 208\"}"
}
```

El campo `details` se envía **stringificado** para mantener la estructura intacta al llegar al CRM.

---

## 🔁 Flujo de Datos

```
Usuario
   │
   ▼
[ index.html ] → Validación frontend
   │
   ▼
[ api.php ] → Proxy (cURL)
   │
   ▼
[ https://hooks.zapier.com/... ] → Webhook
   │
   ▼
[ CRM / Base de datos ]
```

**Ventaja del proxy PHP:**

- Oculta la URL real del endpoint
- Permite agregar validaciones server‑side sin modificar el CRM
- Compatible con hosting compartido sin Node.js

---

## 🛡️ Seguridad Implementada

### Frontend

- Honeypot oculto (`company` field comentado pero disponible)
- Time‑based validation (3 segundos mínimos)
- Validación estricta antes de habilitar envío

### Backend (api.php)

- Sanitización automática con `file_get_contents('php://input')`
- Manejo de errores HTTP y de conexión
- Reenvío de códigos de estado desde el endpoint destino

---

## 🌍 SEO & Redes Sociales

- Meta tags optimizados con keywords locales (Mendoza, Plan de Ahorro, Fiat, Peugeot)
- Open Graph completo para WhatsApp / Facebook / Instagram
- Estructura semántica clara (header, main, section, footer)
- Texto legal completo con referencia a Ley 25.326

---

## 📱 Responsive Design

| Breakpoint | Ajuste automático                         |
| ---------- | ----------------------------------------- |
| > 768px    | Fondo diagonal fijo 40%/60%               |
| ≤ 768px    | Fondo diagonal 30%/70% + padding reducido |
| Todos      | Imágenes flexibles, tipografía fluida     |

---

## 🚀 Despliegue

1. Clonar repositorio
2. Subir archivos a hosting con PHP 7.4+
3. Configurar dominio:
   ```
   formulario.martinco.com.ar
   ```
4. Verificar que `api.php` tenga permisos de escritura/lectura
5. Comprobar conectividad con el webhook de destino

---

## 📊 Optimización para Campañas

✔ Carga rápida (< 1.5s)  
✔ Sin librerías pesadas  
✔ Botón CTA claro y prominente  
✔ Mensaje de éxito inmediato  
✔ Sin fricción (no hay CAPTCHA visual)

**Ideal para:**

- Meta Ads (tráfico caliente)
- Google Ads (intención de compra)
- Remarketing dinámico
- Newsletters y bases propias

---

## 🔧 Posibles Mejoras Futuras

- [ ] Implementar rate‑limiting por IP en `api.php`
- [ ] Agregar logging de intentos fallidos
- [ ] Soportar otros modelos (RAM, Jeep) según parrilla de producto
- [ ] Test A/B en copy del botón y texto legal

---

## 🧪 Testing

| Dispositivo       | Navegadores probados          | Resultado |
| ----------------- | ----------------------------- | --------- |
| Desktop 1920x1080 | Chrome, Firefox, Edge, Safari | ✅ Óptimo |
| iPad Mini         | Safari, Chrome                | ✅ Óptimo |
| iPhone 12         | Safari, Chrome                | ✅ Óptimo |
| Android Pixel 5   | Chrome, Samsung Internet      | ✅ Óptimo |

---

## 📄 Licencia

**Uso exclusivo para Martin Co – Automotores.**  
No se permite su distribución, modificación o uso comercial fuera del ámbito de la empresa sin autorización expresa.

---

**Desarrollado con dedicación para potenciar las conversiones de Martin Co en Mendoza.**  
🇦🇷 2025

---

> “Este README refleja el trabajo real de **@elcombes** en frontend y **@marcearce** en backend.  
> Si llegaste hasta acá, ya sabés quiénes hicieron que esto funcione.”
