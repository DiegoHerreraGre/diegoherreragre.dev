'use client';

import { useState } from 'react';
import { useRouter } from 'next/navigation';
import { useReCaptcha } from 'next-recaptcha-v3';
import { RECAPTCHA_ACTIONS } from '@/config/recaptcha-actions.config';

export const useNewsletter = () => {
    const router = useRouter();
    const { executeRecaptcha } = useReCaptcha();

    const [status, setStatus] = useState({
        message: '',
        success: false,
        loading: false,
    });

    const handleSubmit = async (e) => {
        e.preventDefault();
        setStatus((prev) => ({ ...prev, loading: true }));

        try {
            const recaptchaToken = await executeRecaptcha(RECAPTCHA_ACTIONS.CONTACTO);
            if (!recaptchaToken) throw new Error('Token de reCAPTCHA requerido');

            const formData = new FormData(e.target);
            formData.append('recaptchaToken', recaptchaToken);

            const email = formData.get('email');
            const selectOption = formData.get('selectOption');
            if (!email || !selectOption) throw new Error('Email y selectOption son requeridos');

            const response = await fetch('/api/newsletter', {
                method: 'POST',
                body: formData,
            });
            const data = await response.json();
            if (!response.ok) throw new Error(data.message || 'Error al procesar el contacto');

            setStatus({
                message: data.message || '¡Gracias por contactarme!',
                success: true,
                loading: false,
            });
            e.target.reset();
            setTimeout(() => router.push('/thank-you'), 1000);
        } catch (error) {
            setStatus({
                message: error.message || 'Ocurrió un error, intenta nuevamente',
                success: false,
                loading: false,
            });
        }
    };

    return { handleSubmit, status };
};
