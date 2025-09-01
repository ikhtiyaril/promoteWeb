import React from "react";
import ReactDOM from "react-dom/client";
import SplitText from "./components/SplitText";
import Aurora from './components/Aurora';
import { RainbowButton } from "./components/RainbowButton";
import { InteractiveHoverButton } from "./components/InteractiveHoverButton";
import { MorphingText } from "./components/MorphingText";
import TextCursor from './components/TextCursor';
import GradientText from "./components/GradientText";
import { CometCard } from "./components/CometCard";
import SpotlightCard from "./components/SpotlightCard";
import ProfileCard from "./components/ProfileCard";
import CountUp from "./components/CountUp";
import ShinyText from "./components/ShinyText";
import { a } from "motion/react-client";



const handleAnimationComplete = () => {
  console.log('All letters have animated!');
};
// Cari semua elemen react-split-text
document.querySelectorAll(".react-split-text").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(
    <SplitText
      text={text}
      
  delay={100}
  duration={0.6}
  ease="power3.out"
  splitType="chars"
  from={{ opacity: 0, y: 40 }}
  to={{ opacity: 1, y: 0 }}
  threshold={0.1}
  rootMargin="-100px"
  textAlign="center"
  onLetterAnimationComplete={handleAnimationComplete}
    />
  );
});

document.querySelectorAll(".react-bg-aurora").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

    <Aurora
  colorStops={["#9290C3", "#03346E", "#6EACDA"]}
  blend={0.5}
  amplitude={1.0}
  speed={0.5}
/>
  );
});

document.querySelectorAll(".react-btn-rainbow").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

   <RainbowButton variant="outline" href="https://wa.link/1rh7vl" size="lg" className="bg-yellow-400" >
   {text}
</RainbowButton>

  );
});

document.querySelectorAll(".react-btn-interactive").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

   <InteractiveHoverButton className="bg-transparent hover:bg-blue-800">{text}</InteractiveHoverButton>

  );
});


document.querySelectorAll(".react-morphing-text").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

     <div className="flex h-screen items-center justify-center bg-gray-900 text-white">
      <MorphingText text={["Ikhtiyaril Ikhsan","Web Developer"]} className="" />
    </div>

  );
});

document.querySelectorAll(".react-hover-flow").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

  <TextCursor
  text="*"
  delay={0.01}
  spacing={80}
  followMouseDirection={true}
  randomFloat={true}
  exitDuration={0.3}
  removalInterval={20}
  maxPoints={10}
/>

  );
});

document.querySelectorAll(".react-text-gradient").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

  <GradientText
  colors={["#FFFCFB", "#C5B0CD", "#FFFCFB", "#B2B0E8", "#FFFCFB"]}
  animationSpeed={5}
  showBorder={false}
  className="custom-class"
>
  {text}
</GradientText>

  );
});

document.querySelectorAll(".react-card-komet").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

<CometCard>
  
</CometCard>

  );
});

document.querySelectorAll(".react-text-shine").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

<ShinyText 
  text="Hi Saya" 
  disabled={false} 
  speed={3} 
  className='custom-class' 
/>

  );
});

document.querySelectorAll(".react-countup").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(

<CountUp
  from={0}
  to={to}
  separator=","
  direction="up"
  duration={1}
  className="count-up-text"
/>

  );
});


document.querySelectorAll(".react-card-profile").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(


  
<ProfileCard
  name="Ikhtiyaril Ikhsan"
  title="Software Engineer"
  handle="ikhtiyarill"
  status="Online"
  contactText="Contact Me"
  avatarUrl="LogoIKH2.png"
  iconUrl="logoHardMaintenence"

  innerGradient="linear-gradient(135deg, rgba(250,204,21,0), rgba(249,115,22,0))"

  showUserInfo={true}
  enableTilt={true}
  enableMobileTilt={false}
  
  onContactClick={() => console.log('Contact clicked')}
/>

  );
});

















document.querySelectorAll(".react-card-spotlight").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(
<div
  className="flex md:flex-row gap-4 md:gap-20 mt-10
             overflow-x-auto md:overflow-visible
             flex-nowrap md:flex-wrap scrollbar-hide snap-x snap-mandatory"
>
  <SpotlightCard
    className="custom-spotlight-card hover:border-blue-400/50 
                h-72 md:h-[275px] w-48 md:w-[325px] 
               rounded-md bg-black flex-shrink-0 snap-center"
    spotlightColor="rgba(60, 141, 235, 0.2)"
  >
    <div className="flex-col flex items-center justify-center bg-transparent text-center px-3">
      <div className="flex justify-center items-center w-12 h-12 text-white rounded-full mb-3">
        <img src="logoWebLemot.png" className="h-8 w-8 md:h-10 md:w-10 opacity-100" />
      </div>
      <h3 className="text-base md:text-xl text-white font-semibold mb-2">
        Website Lambat Loading
      </h3>
      <p className="text-slate-300 text-xs md:text-sm">
        Performance buruk yang membuat pengunjung pergi sebelum halaman selesai dimuat.
      </p>
    </div>
  </SpotlightCard>

  <SpotlightCard
    className="custom-spotlight-card hover:border-blue-400/50 
               h-72 md:h-[275px] w-48 md:w-[325px] 
               rounded-md bg-black flex-shrink-0 snap-center"
    spotlightColor="rgba(60, 141, 235, 0.2)"
  >
    <div className="flex-col flex items-center justify-center text-center px-3">
      <div className="flex justify-center items-center w-12 h-12 text-white rounded-full mb-3">
        <img src="logoResponsiveDesign.png" className="h-8 w-8 md:h-10 md:w-10 opacity-100" />
      </div>
      <h3 className="text-base md:text-xl text-white font-semibold mb-2">
        Tidak Responsif di Mobile
      </h3>
      <p className="text-slate-300 text-xs md:text-sm">
        Tampilan berantakan di smartphone dan tablet, kehilangan banyak pengunjung mobile.
      </p>
    </div>
  </SpotlightCard>

  <SpotlightCard
    className="custom-spotlight-card hover:border-blue-400/50 
                h-72 md:h-[275px] w-48 md:w-[325px] 
               rounded-md bg-black flex-shrink-0 snap-center"
    spotlightColor="rgba(60, 141, 235, 0.2)"
  >
    <div className="flex-col flex items-center justify-center text-center px-3">
      <div className="flex justify-center items-center w-12 h-12 text-white rounded-full mb-3">
        <img src="logoHard.png" className="h-8 w-8 md:h-10 md:w-10 opacity-100" />
      </div>
      <h3 className="text-base md:text-xl text-white font-semibold mb-2">
        Sulit di Maintenance
      </h3>
      <p className="text-slate-300 text-xs md:text-sm">
        Kode berantakan yang membuat update dan perbaikan menjadi nightmare.
      </p>
    </div>
  </SpotlightCard>
</div>

  );
});

document.querySelectorAll(".react-card-spotlight2").forEach((el) => {
  const text = el.dataset.text || el.innerText;
  const root = ReactDOM.createRoot(el);
  root.render(
<div className="flex md:flex-row gap-4 md:gap-20 mt-10 
                overflow-x-auto md:overflow-visible 
                flex-nowrap md:flex-wrap scrollbar-hide">
  
  <SpotlightCard
    className="custom-spotlight-card hover:border-blue-400/50 
                 h-72 md:h-[275px] w-48 md:w-[325px] 
               rounded-md bg-black flex-shrink-0"
    spotlightColor="rgba(60, 141, 235, 0.2)"
  >
    <div className="flex-col flex items-center justify-center bg-transparent text-center px-3 md:px-4">
      <div className="flex justify-center items-center w-10 h-10 md:w-12 md:h-12 text-white rounded-full mb-3">
        <img src="logoWebLemot.png" className="h-8 w-8 md:h-10 md:w-10 opacity-100" />
      </div>
      <h3 className="text-base md:text-xl text-white font-semibold mb-1 md:mb-2">
        Clean Code Architecture
      </h3>
      <p className="text-slate-300 text-xs md:text-sm">
        Menggunakan best practices dan struktur kode yang rapi untuk maintainability jangka panjang.
      </p>
    </div>
  </SpotlightCard>

  <SpotlightCard
    className="custom-spotlight-card hover:border-blue-400/50 
               h-72 md:h-[275px] w-48 md:w-[325px] 
               rounded-md bg-black flex-shrink-0"
    spotlightColor="rgba(60, 141, 235, 0.2)"
  >
    <div className="flex-col flex items-center justify-center text-center px-3 md:px-4">
      <div className="flex justify-center items-center w-10 h-10 md:w-12 md:h-12 text-white rounded-full mb-3">
        <img src="logoResponsiveDesign.png" className="h-8 w-8 md:h-10 md:w-10 opacity-100" />
      </div>
      <h3 className="text-base md:text-xl text-white font-semibold mb-1 md:mb-2">
        Mobile-First Design
      </h3>
      <p className="text-slate-300 text-xs md:text-sm">
        Responsive design yang perfect di semua device dengan pendekatan mobile-first.
      </p>
    </div>
  </SpotlightCard>

  <SpotlightCard
    className="custom-spotlight-card hover:border-blue-400/50 
                h-72 md:h-[275px] w-48 md:w-[325px] 
               rounded-md bg-black flex-shrink-0"
    spotlightColor="rgba(60, 141, 235, 0.2)"
  >
    <div className="flex-col flex items-center justify-center text-center px-3 md:px-4">
      <div className="flex justify-center items-center w-10 h-10 md:w-12 md:h-12 text-white rounded-full mb-3">
        <img src="logoHard.png" className="h-8 w-8 md:h-10 md:w-10 opacity-100" />
      </div>
      <h3 className="text-base md:text-xl text-white font-semibold mb-1 md:mb-2">
        Performance Optimization
      </h3>
      <p className="text-slate-300 text-xs md:text-sm">
        Optimasi loading speed dengan lazy loading, code splitting, dan best practices modern.
      </p>
    </div>
  </SpotlightCard>
</div>


  );
});