const Team = () => {
    return (
        <>
            <section className="h-full bg-gray-200 p-6">
                <h1 className="text-center text-3xl">Meet the team</h1>
                <section className="p-12 flex justify-between">
                    <div className="space-y-3 flex flex-col items-center">
                        <img src="abba.jpg" className="w-[200px] h-[200px] rounded-full" alt="" />
                        <h1 className="text-xl font-bold">Abba Jidda</h1>
                        <h2>Team Member</h2>
                    </div>
                    <div className="space-y-3 flex flex-col items-center">
                        <img src="mj.jpg" className="w-[200px] h-[200px] rounded-full" alt="" />
                        <h1 className="text-xl font-bold">Muhammad Jawwad Abdukadir</h1>
                        <h2>Team Member</h2>
                    </div>
                    <div className="space-y-3 flex flex-col items-center">
                        <img src="abba.jpg" className="w-[200px] h-[200px] rounded-full" alt="" />
                        <h1 className="text-xl font-bold">Muhammad Alkali</h1>
                        <h2>Team Member</h2>
                    </div>
                    <div className="space-y-3 flex flex-col items-center">
                        <img src="igor.jpeg" className="w-[200px] h-[200px] rounded-full" alt="" />
                        <h1 className="text-xl font-bold">Yusuf Muhammad</h1>
                        <h2>Team Member</h2>
                    </div>
                </section>
            </section>
        </>
    )
}

export default Team