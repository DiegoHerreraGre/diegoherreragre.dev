import transporter from './smtp.js'

export const sendEmail = async (to, subject, text, isHtml = true) => {
  const mailOptions = {
    from: 'nodemailer@mtmdigital.cl',
    to,
    subject,
    html: isHtml ? text : undefined,
    text: isHtml ? undefined : text,
  }

  try {
    await transporter.sendMail(mailOptions)
    return true
  } catch (error) {
    console.error(error)
    return false
  }
}

export const sendEmailWithAttachment = async (
  to,
  subject,
  text,
  isHtml = true,
  attachment,
) => {
  const mailOptions = {
    from: 'nodemailer@mtmdigital.cl',
    to,
    subject,
    html: isHtml ? text : undefined,
    text: isHtml ? undefined : text,
    attachments: attachment,
  }

  try {
    await transporter.sendMail(mailOptions)
    return true
  } catch (error) {
    console.error(error)
    return false
  }
}
