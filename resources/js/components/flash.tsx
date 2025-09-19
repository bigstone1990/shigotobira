import { toast } from "sonner";
import { useEffect } from 'react';
import { usePage } from '@inertiajs/react';
import { type SharedData } from '@/types';

export default function Flash() {
    const { flash } = usePage<SharedData>().props;

    useEffect(() => {
        if (!flash.id || !flash.message || !flash.status) return;

        switch (flash.status) {
            case 'success':
                toast.success(flash.message);
                break;
            case 'info':
                toast.info(flash.message);
                break;
            case 'warning':
                toast.warning(flash.message);
                break;
            case 'error':
                toast.error(flash.message);
                break;
            default:
                toast(flash.message);
        }
    }, [flash.id, flash.message, flash.status]);
    const state = { ...window.history.state };
    console.log(state)
    return null;
}
