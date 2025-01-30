<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="bg-white">
    <nav class="relative flex items-center justify-between px-8 py-4 bg-biru-1 rounded-[20px] w-full">
        @include ('components.navbar')
    </nav>
    <div class="grid mt-12 place-content-center">

        <section class="flex flex-col blog-header">
            <p>Latest update Minggu, 29 Januari 2025</p>
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam modi quam?</h1>

            <div class="blog-header-2">
                <p>Kategori : Depresi</p>
                <p>Dibuat : Senin, Januari 1000</p>
            </div>
        </section>
        <section class="flex flex-col justify-start gap-4 mt-10 blog-content">
            <img src="{{asset('client/auth/sign_up/img/trung-thanh-rzJ4TEQZe4M-unsplash 1.png')}}" alt="">

            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, aliquam.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate a eos excepturi omnis esse numquam
                molestiae. Reprehenderit harum nulla repellat sapiente aliquid accusamus, deleniti rem amet, tempore
                earum
                voluptatibus velit laborum molestias illum molestiae et odio iusto recusandae. Reprehenderit quod
                deserunt
                ipsum aspernatur nihil minima minus facere rerum exercitationem sed.</p>

            <h3>Lorem ipsum dolor sit</h3>
            <li class="list-decimal">Lorem, ipsum dolor.</li>
            <li class="list-decimal">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            <li class="list-decimal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsam voluptates
                unde dolorem.
            </li>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ipsam aliquam accusamus possimus, nam
                similique et cupiditate nobis eius eum iste autem provident totam rem laudantium fuga omnis voluptatum
                libero quisquam quidem. Eius laborum, nobis distinctio incidunt totam est nostrum debitis veniam
                similique, quasi commodi labore. Omnis nisi cumque in!</p>

            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nihil alias nisi quod fuga?</h2>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, quasi! Itaque incidunt, labore quidem
                ab non temporibus voluptatibus neque dolores facilis fuga. Nulla cumque praesentium eaque, ut error ipsa
                maxime sequi autem eum officia dicta labore accusantium saepe soluta molestiae eveniet quas impedit
                maiores neque quos natus incidunt enim! Impedit reiciendis perspiciatis sunt! Laboriosam doloremque hic
                distinctio earum molestias autem. Omnis quia exercitationem rerum adipisci obcaecati saepe accusamus.
                Temporibus, laborum possimus maiores soluta illum laboriosam voluptate nulla, eveniet minima eum
                ducimus? Animi accusamus quaerat dicta, nemo voluptate numquam. Numquam aut ducimus aliquam porro esse
                pariatur nobis neque itaque beatae libero eum, maxime velit laudantium in excepturi sit! Distinctio
                aliquid magnam blanditiis nostrum similique, vitae ullam laudantium doloremque sint sit veniam.</p>
        </section>
    </div>

    <footer
        class="bg-biru-1 mt-12 rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
        @include ('components.footer')
    </footer>
</body>

</html>