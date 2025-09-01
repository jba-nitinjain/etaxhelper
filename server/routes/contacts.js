const express = require('express');
const router = express.Router();
const contactService = require('../services/contactService');

// GET /api/contacts
router.get('/', async (req, res) => {
  try {
    const contacts = await contactService.getAll();
    res.json(contacts);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// GET /api/contacts/:id
router.get('/:id', async (req, res) => {
  try {
    const contact = await contactService.getById(parseInt(req.params.id));
    if (!contact) {
      return res.status(404).json({ error: 'Contact not found' });
    }
    res.json(contact);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// GET /api/contacts/organization/:orgId
router.get('/organization/:orgId', async (req, res) => {
  try {
    const contacts = await contactService.getByOrganization(parseInt(req.params.orgId));
    res.json(contacts);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// POST /api/contacts
router.post('/', async (req, res) => {
  try {
    const contact = await contactService.create(req.body);
    res.status(201).json(contact);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// PUT /api/contacts/:id
router.put('/:id', async (req, res) => {
  try {
    const contact = await contactService.update(parseInt(req.params.id), req.body);
    if (!contact) {
      return res.status(404).json({ error: 'Contact not found' });
    }
    res.json(contact);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// DELETE /api/contacts/:id
router.delete('/:id', async (req, res) => {
  try {
    const success = await contactService.delete(parseInt(req.params.id));
    if (!success) {
      return res.status(404).json({ error: 'Contact not found' });
    }
    res.status(204).send();
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// GET /api/contacts/search/:query
router.get('/search/:query', async (req, res) => {
  try {
    const contacts = await contactService.search(req.params.query);
    res.json(contacts);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

module.exports = router;