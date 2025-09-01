const express = require('express');
const router = express.Router();
const organizationService = require('../services/organizationService');

// GET /api/organizations
router.get('/', async (req, res) => {
  try {
    const organizations = await organizationService.getAll();
    res.json(organizations);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// GET /api/organizations/:id
router.get('/:id', async (req, res) => {
  try {
    const organization = await organizationService.getById(parseInt(req.params.id));
    if (!organization) {
      return res.status(404).json({ error: 'Organization not found' });
    }
    res.json(organization);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// POST /api/organizations
router.post('/', async (req, res) => {
  try {
    const organization = await organizationService.create(req.body);
    res.status(201).json(organization);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// PUT /api/organizations/:id
router.put('/:id', async (req, res) => {
  try {
    const organization = await organizationService.update(parseInt(req.params.id), req.body);
    if (!organization) {
      return res.status(404).json({ error: 'Organization not found' });
    }
    res.json(organization);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// DELETE /api/organizations/:id
router.delete('/:id', async (req, res) => {
  try {
    const success = await organizationService.delete(parseInt(req.params.id));
    if (!success) {
      return res.status(404).json({ error: 'Organization not found' });
    }
    res.status(204).send();
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// GET /api/organizations/search/:query
router.get('/search/:query', async (req, res) => {
  try {
    const organizations = await organizationService.search(req.params.query);
    res.json(organizations);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

module.exports = router;