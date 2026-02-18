# Zylu Backend API

This is the backend API for the Zylu application.

## Installation

1. Install dependencies:
```bash
npm install
```

2. Create environment file:
```bash
cp .env.example .env
```

3. Update the `.env` file with your configuration.

## Running the Server

### Development mode:
```bash
npm run dev
```

### Production mode:
```bash
npm start
```

## API Endpoints

- `GET /` - Welcome message
- `GET /api/health` - Health check endpoint

## Project Structure

```
backend/
├── index.js          # Main server file
├── package.json      # Dependencies and scripts
├── .env.example      # Environment variables template
├── .gitignore        # Git ignore file
└── README.md         # This file
```

## Technologies Used

- Node.js
- Express.js
- CORS
- Helmet (security)
- Morgan (logging)
- Dotenv (environment variables)
