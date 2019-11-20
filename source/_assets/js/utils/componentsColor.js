const storageKey = 'components-color';

export const setComponentsColor = color =>
  localStorage.setItem(storageKey, color);

export const getComponentsColor = () =>
  localStorage.getItem(storageKey) || 'teal';
