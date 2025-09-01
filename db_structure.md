# etaxhelper – Database Structure

_Generated on 2025-09-01 18:38:47_

## Overview
This document describes the tables, columns, keys, indexes, and relationships defined in the provided MySQL schema for the **etaxhelper** database.

## Entity‑Relationship (ER) Diagram

```mermaid
erDiagram
  ORGANIZATION {
    BIGINT org_id
    ENUM('PROPRIETORSHIP' org_type
    VARCHAR company_name
    VARCHAR display_name
    VARCHAR email
    VARCHAR phone_work
  }
  organization_bank {
    BIGINT bank_id
    BIGINT org_id
    VARCHAR bank_name
    VARCHAR branch_name
    VARCHAR account_no
    VARCHAR ifsc_code
    VARCHAR swift_code
    VARCHAR account_type
    ENUM('SINGLY' mode_of_operation
  }
  organization_bank_signatory {
    BIGINT signatory_id
    BIGINT bank_id
    VARCHAR NAME
    VARCHAR designation
    VARCHAR email
    VARCHAR phone
  }
  organization_branch {
    BIGINT branch_id
    BIGINT org_id
    VARCHAR branch_name
    VARCHAR address_line
    VARCHAR city
    VARCHAR state
    VARCHAR postal_code
    VARCHAR country
    VARCHAR phone
    VARCHAR email
  }
  organization_contact {
    BIGINT contact_id
    BIGINT org_id
    VARCHAR NAME
    VARCHAR designation
    VARCHAR email
    VARCHAR phone
    DATE dob
    VARCHAR city
    VARCHAR pin
    VARCHAR country
  }
  organization_director {
    BIGINT director_id
    BIGINT org_id
    VARCHAR NAME
    VARCHAR designation
    VARCHAR email
    VARCHAR phone
    VARCHAR din_number
    DATE dob
    VARCHAR city
    VARCHAR pin
    VARCHAR country
    DATE date_of_appointment
  }
  organization_login {
    BIGINT login_id
    BIGINT org_id
    BIGINT related_social_id
    VARCHAR website
    VARCHAR user_id
    VARCHAR PASSWORD
    VARCHAR notes
    DATETIME last_updated
  }
  organization_registration {
    BIGINT reg_id
    BIGINT org_id
    VARCHAR reg_type
    VARCHAR reg_number
    DATE valid_from
    DATE valid_to
  }
  organization_social_media {
    BIGINT social_id
    BIGINT org_id
    VARCHAR platform
    VARCHAR handle_name
    VARCHAR website
    VARCHAR mobile_app
  }
  organization_bank }o--|| ORGANIZATION : "org_id→org_id"
  organization_bank_signatory }o--|| organization_bank : "bank_id→bank_id"
  organization_branch }o--|| ORGANIZATION : "org_id→org_id"
  organization_contact }o--|| ORGANIZATION : "org_id→org_id"
  organization_director }o--|| ORGANIZATION : "org_id→org_id"
  organization_login }o--|| ORGANIZATION : "org_id→org_id"
  organization_login }o--|| organization_social_media : "related_social_id→social_id"
  organization_registration }o--|| ORGANIZATION : "org_id→org_id"
  organization_social_media }o--|| ORGANIZATION : "org_id→org_id"
```

## Tables

### ORGANIZATION

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `org_id` | `bigint` | ✔️ | ✔️ |  |
| `org_type` | `enum('Proprietorship'` |  |  | `NULL` |
| `company_name` | `varchar(255)` |  |  | `NULL` |
| `display_name` | `varchar(255)` | ✔️ |  |  |
| `email` | `varchar(255)` |  |  | `NULL` |
| `phone_work` | `varchar(32)` |  |  | `NULL` |

- **Primary Key:** `org_id`
- **Indexes:**
  - `ix_org_display_name` on (`display_name`)

---

### organization_bank

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `bank_id` | `bigint` | ✔️ | ✔️ |  |
| `org_id` | `bigint` | ✔️ |  |  |
| `bank_name` | `varchar(255)` | ✔️ |  |  |
| `branch_name` | `varchar(255)` |  |  | `NULL` |
| `account_no` | `varchar(64)` | ✔️ |  |  |
| `ifsc_code` | `varchar(11)` |  |  | `NULL` |
| `swift_code` | `varchar(11)` |  |  | `NULL` |
| `account_type` | `varchar(64)` |  |  | `NULL` |
| `mode_of_operation` | `enum('Singly'` |  |  | `NULL` |

- **Primary Key:** `bank_id`
- **Unique Keys:**
  - `ux_bank_org_acct` on (`org_id`, `account_no`)
- **Indexes:**
  - `ix_bank_org` on (`org_id`)
- **Foreign Keys:**
  - `fk_bank_org`: (`org_id`) → `ORGANIZATION`(`org_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

### organization_bank_signatory

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `signatory_id` | `bigint` | ✔️ | ✔️ |  |
| `bank_id` | `bigint` | ✔️ |  |  |
| `NAME` | `varchar(255)` | ✔️ |  |  |
| `designation` | `varchar(255)` |  |  | `NULL` |
| `email` | `varchar(255)` |  |  | `NULL` |
| `phone` | `varchar(32)` |  |  | `NULL` |

- **Primary Key:** `signatory_id`
- **Indexes:**
  - `ix_signatory_bank` on (`bank_id`)
- **Foreign Keys:**
  - `fk_signatory_bank`: (`bank_id`) → `organization_bank`(`bank_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

### organization_branch

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `branch_id` | `bigint` | ✔️ | ✔️ |  |
| `org_id` | `bigint` | ✔️ |  |  |
| `branch_name` | `varchar(255)` |  |  | `NULL` |
| `address_line` | `varchar(255)` |  |  | `NULL` |
| `city` | `varchar(128)` |  |  | `NULL` |
| `state` | `varchar(128)` |  |  | `NULL` |
| `postal_code` | `varchar(12)` |  |  | `NULL` |
| `country` | `varchar(128)` |  |  | `NULL` |
| `phone` | `varchar(32)` |  |  | `NULL` |
| `email` | `varchar(255)` |  |  | `NULL` |

- **Primary Key:** `branch_id`
- **Indexes:**
  - `ix_branch_org` on (`org_id`)
- **Foreign Keys:**
  - `fk_branch_org`: (`org_id`) → `ORGANIZATION`(`org_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

### organization_contact

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `contact_id` | `bigint` | ✔️ | ✔️ |  |
| `org_id` | `bigint` | ✔️ |  |  |
| `NAME` | `varchar(255)` | ✔️ |  |  |
| `designation` | `varchar(255)` |  |  | `NULL` |
| `email` | `varchar(255)` |  |  | `NULL` |
| `phone` | `varchar(32)` |  |  | `NULL` |
| `dob` | `date` |  |  | `NULL` |
| `city` | `varchar(128)` |  |  | `NULL` |
| `pin` | `varchar(12)` |  |  | `NULL` |
| `country` | `varchar(128)` |  |  | `NULL` |

- **Primary Key:** `contact_id`
- **Indexes:**
  - `ix_contact_org` on (`org_id`)
- **Foreign Keys:**
  - `fk_contact_org`: (`org_id`) → `ORGANIZATION`(`org_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

### organization_director

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `director_id` | `bigint` | ✔️ | ✔️ |  |
| `org_id` | `bigint` | ✔️ |  |  |
| `NAME` | `varchar(255)` | ✔️ |  |  |
| `designation` | `varchar(255)` |  |  | `NULL` |
| `email` | `varchar(255)` |  |  | `NULL` |
| `phone` | `varchar(32)` |  |  | `NULL` |
| `din_number` | `varchar(32)` |  |  | `NULL` |
| `dob` | `date` |  |  | `NULL` |
| `city` | `varchar(128)` |  |  | `NULL` |
| `pin` | `varchar(12)` |  |  | `NULL` |
| `country` | `varchar(128)` |  |  | `NULL` |
| `date_of_appointment` | `date` |  |  | `NULL` |

- **Primary Key:** `director_id`
- **Indexes:**
  - `ix_director_org` on (`org_id`)
- **Foreign Keys:**
  - `fk_director_org`: (`org_id`) → `ORGANIZATION`(`org_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

### organization_login

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `login_id` | `bigint` | ✔️ | ✔️ |  |
| `org_id` | `bigint` | ✔️ |  |  |
| `related_social_id` | `bigint` |  |  | `NULL` |
| `website` | `varchar(512)` | ✔️ |  |  |
| `user_id` | `varchar(255)` | ✔️ |  |  |
| `PASSWORD` | `varchar(255)` | ✔️ |  |  |
| `notes` | `varchar(1024)` |  |  | `NULL` |
| `last_updated` | `datetime` | ✔️ |  | `CURRENT_TIMESTAMP` |

- **Primary Key:** `login_id`
- **Indexes:**
  - `ix_login_org` on (`org_id`)
  - `ix_login_website` on (`website`)
  - `fk_login_social` on (`related_social_id`)
- **Foreign Keys:**
  - `fk_login_org`: (`org_id`) → `ORGANIZATION`(`org_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)
  - `fk_login_social`: (`related_social_id`) → `organization_social_media`(`social_id`) (ON DELETE SET NULL ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

### organization_registration

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `reg_id` | `bigint` | ✔️ | ✔️ |  |
| `org_id` | `bigint` | ✔️ |  |  |
| `reg_type` | `varchar(64)` |  |  | `NULL` |
| `reg_number` | `varchar(128)` |  |  | `NULL` |
| `valid_from` | `date` |  |  | `NULL` |
| `valid_to` | `date` |  |  | `NULL` |

- **Primary Key:** `reg_id`
- **Indexes:**
  - `ix_reg_org` on (`org_id`)
- **Foreign Keys:**
  - `fk_reg_org`: (`org_id`) → `ORGANIZATION`(`org_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

### organization_social_media

| Column | Type | Not Null | Auto Increment | Default |
|---|---|:---:|:---:|---|
| `social_id` | `bigint` | ✔️ | ✔️ |  |
| `org_id` | `bigint` | ✔️ |  |  |
| `platform` | `varchar(128)` | ✔️ |  |  |
| `handle_name` | `varchar(255)` |  |  | `NULL` |
| `website` | `varchar(512)` |  |  | `NULL` |
| `mobile_app` | `varchar(255)` |  |  | `NULL` |

- **Primary Key:** `social_id`
- **Indexes:**
  - `ix_social_org` on (`org_id`)
- **Foreign Keys:**
  - `fk_social_org`: (`org_id`) → `ORGANIZATION`(`org_id`) (ON DELETE CASCADE ON UPDATE RESTRICT, ON UPDATE RESTRICT)

---

## Relationships Summary

- **organization_bank** → **ORGANIZATION** via (org_id) referencing (org_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_bank_signatory** → **organization_bank** via (bank_id) referencing (bank_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_branch** → **ORGANIZATION** via (org_id) referencing (org_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_contact** → **ORGANIZATION** via (org_id) referencing (org_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_director** → **ORGANIZATION** via (org_id) referencing (org_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_login** → **ORGANIZATION** via (org_id) referencing (org_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_login** → **organization_social_media** via (related_social_id) referencing (social_id); on delete **SET NULL ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_registration** → **ORGANIZATION** via (org_id) referencing (org_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.
- **organization_social_media** → **ORGANIZATION** via (org_id) referencing (org_id); on delete **CASCADE ON UPDATE RESTRICT**, on update **RESTRICT**.