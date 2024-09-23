# API Documentation

## Overview
This API allows interaction with the **Freelance**, **Jasa**, and **Pesan** resources, providing the ability to perform CRUD operations. The API follows RESTful principles and uses standard HTTP methods such as `GET`, `POST`, `PUT/PATCH`, and `DELETE`.

All API routes are prefixed with `/api`, and some routes may require authentication via `auth:sanctum` for certain features (like user management).

## Base URL
```
http://your-domain.com/api
```

---

## Freelance API

### List Freelances
- **URL**: `/freelances`
- **Method**: `GET`
- **Description**: Retrieves a list of all freelances.
- **Response**:
  ```json
  [
    {
      "id": 1,
      "nama_perusahaan": "Company A",
      "email": "email@example.com",
      "alamat": "Address",
      "gambar": "image_url",
      "bidang": "Technology",
      "created_at": "2024-09-23T10:00:00.000000Z",
      "updated_at": "2024-09-23T10:00:00.000000Z"
    },
    ...
  ]
  ```

### Create Freelance
- **URL**: `/freelances`
- **Method**: `POST`
- **Description**: Creates a new freelance.
- **Body**:
  ```json
  {
    "nama_perusahaan": "Company A",
    "email": "email@example.com",
    "alamat": "Address",
    "gambar": "image_url",
    "bidang": "Technology"
  }
  ```
- **Response**:
  ```json
  {
    "id": 1,
    "nama_perusahaan": "Company A",
    "email": "email@example.com",
    "alamat": "Address",
    "gambar": "image_url",
    "bidang": "Technology",
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Show Freelance
- **URL**: `/freelances/{id}`
- **Method**: `GET`
- **Description**: Retrieves a freelance by ID.
- **Response**:
  ```json
  {
    "id": 1,
    "nama_perusahaan": "Company A",
    "email": "email@example.com",
    "alamat": "Address",
    "gambar": "image_url",
    "bidang": "Technology",
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Update Freelance
- **URL**: `/freelances/{id}`
- **Method**: `PUT/PATCH`
- **Description**: Updates an existing freelance by ID.
- **Body** (example):
  ```json
  {
    "nama_perusahaan": "Updated Company"
  }
  ```
- **Response**:
  ```json
  {
    "id": 1,
    "nama_perusahaan": "Updated Company",
    "email": "email@example.com",
    "alamat": "Updated Address",
    "gambar": "new_image_url",
    "bidang": "Technology",
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Delete Freelance
- **URL**: `/freelances/{id}`
- **Method**: `DELETE`
- **Description**: Deletes a freelance by ID.
- **Response**:
  ```json
  {
    "message": "Freelance deleted successfully"
  }
  ```

---

## Jasa API

### List Jasa
- **URL**: `/jasa`
- **Method**: `GET`
- **Description**: Retrieves a list of all jasa (services).
- **Response**:
  ```json
  [
    {
      "id": 1,
      "freelance_id": 1,
      "nama_jasa": "Web Development",
      "harga": 500000,
      "gambar": "image_url",
      "created_at": "2024-09-23T10:00:00.000000Z",
      "updated_at": "2024-09-23T10:00:00.000000Z"
    },
    ...
  ]
  ```

### Create Jasa
- **URL**: `/jasa`
- **Method**: `POST`
- **Description**: Creates a new jasa.
- **Body**:
  ```json
  {
    "freelance_id": 1,
    "nama_jasa": "Web Development",
    "harga": 500000,
    "gambar": "image_url"
  }
  ```
- **Response**:
  ```json
  {
    "id": 1,
    "freelance_id": 1,
    "nama_jasa": "Web Development",
    "harga": 500000,
    "gambar": "image_url",
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Show Jasa
- **URL**: `/jasa/{id}`
- **Method**: `GET`
- **Description**: Retrieves a jasa by ID.
- **Response**:
  ```json
  {
    "id": 1,
    "freelance_id": 1,
    "nama_jasa": "Web Development",
    "harga": 500000,
    "gambar": "image_url",
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Update Jasa
- **URL**: `/jasa/{id}`
- **Method**: `PUT/PATCH`
- **Description**: Updates an existing jasa by ID.
- **Body** (example):
  ```json
  {
    "nama_jasa": "Mobile App Development",
    "harga": 600000
  }
  ```
- **Response**:
  ```json
  {
    "id": 1,
    "freelance_id": 1,
    "nama_jasa": "Mobile App Development",
    "harga": 600000,
    "gambar": "new_image_url",
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Delete Jasa
- **URL**: `/jasa/{id}`
- **Method**: `DELETE`
- **Description**: Deletes a jasa by ID.
- **Response**:
  ```json
  {
    "message": "Jasa deleted successfully"
  }
  ```

---

## Pesan API

### List Pesan
- **URL**: `/pesan`
- **Method**: `GET`
- **Description**: Retrieves a list of all orders (pesan).
- **Response**:
  ```json
  [
    {
      "id": 1,
      "freelance_id": 1,
      "jasa_id": 1,
      "tanggal": "2024-09-23",
      "harga": 500000,
      "created_at": "2024-09-23T10:00:00.000000Z",
      "updated_at": "2024-09-23T10:00:00.000000Z"
    },
    ...
  ]
  ```

### Create Pesan
- **URL**: `/pesan`
- **Method**: `POST`
- **Description**: Creates a new order (pesan).
- **Body**:
  ```json
  {
    "freelance_id": 1,
    "jasa_id": 1,
    "tanggal": "2024-09-23",
    "harga": 500000
  }
  ```
- **Response**:
  ```json
  {
    "id": 1,
    "freelance_id": 1,
    "jasa_id": 1,
    "tanggal": "2024-09-23",
    "harga": 500000,
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Show Pesan
- **URL**: `/pesan/{id}`
- **Method**: `GET`
- **Description**: Retrieves a pesan by ID.
- **Response**:
  ```json
  {
    "id": 1,
    "freelance_id": 1,
    "jasa_id": 1,
    "tanggal": "202

4-09-23",
    "harga": 500000,
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Update Pesan
- **URL**: `/pesan/{id}`
- **Method**: `PUT/PATCH`
- **Description**: Updates an existing order (pesan) by ID.
- **Body** (example):
  ```json
  {
    "tanggal": "2024-09-25",
    "harga": 600000
  }
  ```
- **Response**:
  ```json
  {
    "id": 1,
    "freelance_id": 1,
    "jasa_id": 1,
    "tanggal": "2024-09-25",
    "harga": 600000,
    "created_at": "2024-09-23T10:00:00.000000Z",
    "updated_at": "2024-09-23T10:00:00.000000Z"
  }
  ```

### Delete Pesan
- **URL**: `/pesan/{id}`
- **Method**: `DELETE`
- **Description**: Deletes a pesan by ID.
- **Response**:
  ```json
  {
    "message": "Pesan deleted successfully"
  }
  ```

---

## Authentication
Some endpoints may require authentication via Sanctum. Make sure to include an `Authorization` header with the Bearer token for secured routes.

---

This API documentation outlines the endpoints and structure needed for managing **Freelance**, **Jasa**, and **Pesan** resources. Use tools like Postman to interact with these APIs effectively.

