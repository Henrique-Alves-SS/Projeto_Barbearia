import { Head, Link, usePage } from '@inertiajs/react';
import { ArrowRight, Scissors } from 'lucide-react';
import { dashboard, login, register } from '@/routes';

const services = [
    {
        number: '01',
        name: 'Corte masculino',
        description: 'Do classico ao atual, com atencao aos detalhes.',
    },
    {
        number: '02',
        name: 'Barba',
        description: 'Acabamento preciso para manter seu estilo em dia.',
    },
    {
        number: '03',
        name: 'Cabelo e barba',
        description: 'Um cuidado completo, no mesmo lugar.',
    },
];

export default function Welcome() {
    const { auth } = usePage().props;

    return (
        <>
            <Head title="Barbearia" />
            <div className="min-h-screen bg-[#0b0d10] text-[#f4f6f8]">
                <header className="border-b border-white/10">
                    <div className="mx-auto flex w-full max-w-6xl items-center justify-between px-5 py-5 sm:px-8">
                        <a href="#inicio" className="flex items-center gap-3" aria-label="Barbearia, inicio">
                            <span className="flex size-10 items-center justify-center rounded-sm bg-[#1769aa] text-white">
                                <Scissors size={20} strokeWidth={1.8} />
                            </span>
                            <span className="text-sm font-semibold tracking-[0.12em]">BARBEARIA</span>
                        </a>
                        <nav className="flex items-center gap-3 text-sm sm:gap-6">
                            <a href="#servicos" className="hidden text-white/70 transition hover:text-white sm:inline">Servicos</a>
                            {auth.user ? (
                                <Link href={dashboard()} className="rounded-sm border border-white/20 px-4 py-2 transition hover:border-[#4b9fe1] hover:text-[#75baff]">
                                    Painel
                                </Link>
                            ) : (
                                <>
                                    <Link href={login()} className="text-white/75 transition hover:text-white">Entrar</Link>
                                    <Link href={register()} className="rounded-sm bg-[#1769aa] px-4 py-2 font-medium transition hover:bg-[#217fc9]">Criar conta</Link>
                                </>
                            )}
                        </nav>
                    </div>
                </header>

                <main>
                    <section id="inicio" className="mx-auto grid min-h-[560px] w-full max-w-6xl items-center gap-10 px-5 py-16 sm:px-8 md:grid-cols-[1.05fr_0.95fr] md:py-20">
                        <div className="max-w-xl">
                            <p className="mb-5 flex items-center gap-3 text-xs font-semibold tracking-[0.18em] text-[#75baff] uppercase">
                                <span className="h-px w-8 bg-[#328bd0]" />
                                Cuidado classico, estilo atual
                            </p>
                            <h1 className="text-4xl leading-tight font-semibold sm:text-5xl">
                                Um bom corte muda o seu <span className="text-[#5aa8ec]">dia.</span>
                            </h1>
                            <p className="mt-5 max-w-md text-base leading-7 text-white/65">
                                Seu espaco para cuidar do visual com calma, atencao e um servico bem feito.
                            </p>
                            <div className="mt-8 flex flex-wrap items-center gap-5">
                                <a href="#servicos" className="inline-flex items-center gap-2 rounded-sm bg-[#1769aa] px-5 py-3 text-sm font-medium transition hover:bg-[#217fc9]">
                                    Conheca os servicos <ArrowRight size={16} />
                                </a>
                                <span className="text-sm text-white/50">Cuidado em cada detalhe</span>
                            </div>
                        </div>

                        <div className="relative min-h-[300px] overflow-hidden rounded-sm border border-white/10 bg-[#141a21] md:min-h-[390px]">
                            <img
                                src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=1200&q=85"
                                alt="Interior de uma barbearia com cadeira de barbeiro"
                                className="absolute inset-0 size-full object-cover opacity-75"
                            />
                            <div className="absolute inset-0 bg-gradient-to-t from-[#0b0d10]/80 via-transparent to-[#0b0d10]/10" />
                            <div className="absolute right-5 bottom-5 left-5 border-l-2 border-[#328bd0] pl-4">
                                <p className="text-xs tracking-[0.14em] text-white/70 uppercase">Seu estilo, do seu jeito</p>
                                <p className="mt-1 text-lg font-medium">Um espaco feito para voce.</p>
                            </div>
                        </div>
                    </section>

                    <section id="servicos" className="border-t border-white/10 bg-[#101419]">
                        <div className="mx-auto w-full max-w-6xl px-5 py-14 sm:px-8 md:py-16">
                            <div className="mb-8 flex flex-wrap items-end justify-between gap-4">
                                <div>
                                    <p className="mb-2 text-xs font-semibold tracking-[0.18em] text-[#75baff] uppercase">O que fazemos</p>
                                    <h2 className="text-2xl font-semibold sm:text-3xl">Servicos</h2>
                                </div>
                                <p className="max-w-sm text-sm leading-6 text-white/55">Cuidado simples e bem feito, com atencao ao que combina com voce.</p>
                            </div>
                            <div className="grid border-t border-white/10 sm:grid-cols-3">
                                {services.map((service) => (
                                    <article key={service.number} className="border-b border-white/10 py-6 sm:border-r sm:px-6 sm:first:pl-0 sm:last:border-r-0">
                                        <p className="mb-5 text-xs tracking-wider text-[#5aa8ec]">{service.number}</p>
                                        <h3 className="text-lg font-medium">{service.name}</h3>
                                        <p className="mt-2 text-sm leading-6 text-white/55">{service.description}</p>
                                    </article>
                                ))}
                            </div>
                        </div>
                    </section>
                </main>

                <footer className="border-t border-white/10">
                    <div className="mx-auto flex w-full max-w-6xl flex-col gap-2 px-5 py-5 text-xs text-white/45 sm:flex-row sm:items-center sm:justify-between sm:px-8">
                        <span>BARBEARIA</span>
                        <span>Seu cuidado começa aqui.</span>
                    </div>
                </footer>
            </div>
        </>
    );
}
