import React from "react";
import SplitText from "../components/SplitText";

export default function Home() {
  return (
    <section className="bg-gradient-to-r text-white h-screen flex flex-col justify-center items-center text-center px-6">
      <SplitText
        text="Halo Aku Ikhtiyaril Ikhsan"
        className="text-4xl font-bold"
        delay={100}
        duration={0.6}
      />
      <p className="mt-4 text-lg md:text-xl max-w-3xl mx-auto">
        Junior Web Developer yang siap menyelesaikan masalah website Anda dengan
        solusi coding yang clean, responsif, dan modern.
      </p>
      <a
        href="#order"
        className="mt-8 inline-block py-3 px-8 text-lg font-semibold bg-yellow-400 text-black rounded-xl hover:bg-yellow-500 transition duration-300"
      >
        Order Now
      </a>
    </section>
  );
}
