import jwt from 'jsonwebtoken'
import envs from '@/config/envs.config'

const { JWT_SECRET } = envs

export const generateToken = (payload) => {
  return jwt.sign(payload, JWT_SECRET, { expiresIn: '1h' })
}

export const verifyToken = (token) => {
  return jwt.verify(token, JWT_SECRET)
}
