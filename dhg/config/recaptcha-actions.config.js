export const RECAPTCHA_ACTIONS = {
  CONTACTO: "contacto",
};

export const RECAPTCHA_MIN_SCORES = {
  [RECAPTCHA_ACTIONS.CONTACTO]: 0.6,
};

export const RECAPTCHA_CONFIG = {
  development: {
    minScore: 0.3,
    logDetails: true,
  },
  production: {
    minScore: 0.6,
    logDetails: false,
  },
};

export function getMinScoreForAction(action, environment = "production") {
  const envConfig =
    RECAPTCHA_CONFIG[environment] || RECAPTCHA_CONFIG.production;
  const actionScore = RECAPTCHA_MIN_SCORES[action];
  return actionScore !== undefined ? actionScore : envConfig.minScore;
}
