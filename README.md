# Public Post Preview Expiration

**Contributors:** winglouie <br>
**Tags:** public post preview, expiration, nonce, security  
**Requires at least:** 5.0  
**Tested up to:** 6.7
**Requires PHP:** 7.2  
**Stable tag:** 1.0.1  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

Extends the Public Post Preview plugin by allowing users to customize the expiration time dynamically through the WordPress admin panel.

---

## 🚀 Features

- Set the expiration time for Public Post Preview links.
- Customize the expiration time in **minutes** (from 1 minute to 3 days).
- Secure input validation to prevent invalid values.
- Fully integrated into the **WordPress Settings panel**.
- Safe and lightweight implementation.

---

## 📌 Installation

1. **Download the plugin.**  
1. Download the repository and extract it.
2. Upload the extracted **public-post-preview-expiration** folder to `/wp-content/plugins/`.
3. Activate the plugin in **WordPress Admin > Plugins**.

---

## ⚙️ How to Use

1. Navigate to **Settings > PPP Expiration** in your WordPress admin panel.
2. Enter the expiration time in **minutes** (minimum: 1, maximum: 4320 minutes / 3 days).
3. Click **Save Changes**.
4. Public Post Preview links will now expire based on your selected time.

---

## 🔒 Security

- User input is **sanitized** and validated to prevent unauthorized values.
- The input is limited between **1 minute and 3 days** to avoid extreme values.
- **Escaped output** prevents XSS attacks.

---

## 🛠️ Frequently Asked Questions

### **What happens if I enter an invalid value?**
The plugin automatically **adjusts** any invalid values:
- If below **1 minute**, it defaults to **1 minute**.
- If above **3 days (4320 minutes)**, it defaults to **3 days**.

### **Does this work without Public Post Preview installed?**
No, this plugin **extends** the [Public Post Preview](https://wordpress.org/plugins/public-post-preview/) plugin, so it must be installed and activated first.

---

## 📌 Changelog

### **1.0.1** - (March 2025)
- Security enhancements for user input.
- Set expiration time in minutes instead of seconds.
- Capped expiration limit to **3 days (4320 minutes)**.

### **1.0.0**
- Initial implementation of dynamic expiration settings.

---

## 📜 License
This plugin is released under the **GPLv2 or later** license.

---
💡 **Developed by [Louie Sonugan](https://louiesonugan.com/).**
