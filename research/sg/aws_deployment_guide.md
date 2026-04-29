# Guide: Deploying Research Reports to your AWS WordPress

To share these reports with an executive via your existing AWS infrastructure, follow these steps.

---

## Option 1: Uploading the HTML Dashboard (Recommended)
This is the cleanest method for an executive to view the report as a standalone webpage.

1.  **Locate your AWS WP Root:** Use SFTP (e.g., FileZilla) or SSH to connect to your AWS EC2 instance.
2.  **Create a Research Folder:** Navigate to `/var/www/html/` (standard WP root) and create a folder named `research`.
3.  **Upload Artifacts:** Upload `shareable_report_en.html` and `shareable_report_zh.html` into that folder.
4.  **Share the Link:** The executive can now visit:
    *   `https://yourdomain.com/research/shareable_report_en.html`

---

## Option 2: Publishing as a WordPress Post
If you want the research to live *inside* your WordPress theme:

1.  **Open WP Admin:** Log in to your WordPress dashboard on AWS.
2.  **New Post/Page:** Create a new Page titled "Meyer Road Investment Research".
3.  **Copy Content:** Open the `.md` (Markdown) files I provided. You can paste the content directly if you have a Markdown plugin, or copy-paste the tables into the Gutenberg block editor.
4.  **Mermaid Flowcharts:** To render the flowcharts in WP, install the "Mermaid" plugin or a "Shortcode" plugin that supports Mermaid.js.

---

## Option 3: Using AWS S3 (Static Hosting)
If you don't want to touch your WordPress installation:

1.  **Create S3 Bucket:** Create a public bucket (e.g., `research- Meyer-road`).
2.  **Upload HTML:** Upload the `.html` files.
3.  **Enable Static Website Hosting:** In the S3 properties, enable hosting and note the URL provided by AWS.
4.  **Security:** You can restrict access to this bucket by the executive's IP address if the data is sensitive.

---

## File Manifest for Transfer:
*   `research/sg/shareable_report_en.html` (Standalone Dashboard)
*   `research/sg/shareable_report_zh.html` (Standalone Dashboard - Chinese)
*   `research/sg/document_1a.md` (Source Data - English)
*   `research/sg/document_1b.md` (Source Data - Chinese)
