const Team = () => {
    return (
        <>
            <section className="h-full bg-gray-200 p-6">
                <h1 className="text-center text-3xl">Meet the team</h1>
                <section className="p-12 flex justify-between space-x-6">
                    <div className="space-y-3 flex flex-col items-center transition-transform transform hover:scale-105">
                        <img src="abba.jpg" className="w-[200px] h-[200px] rounded-full shadow-lg" alt="" />
                        <h1 className="text-xl font-bold text-gray-800">Abba Jidda</h1>
                        <h2 className="text-gray-600">Team Member</h2>
                    </div>
                    <div className="space-y-3 flex flex-col items-center transition-transform transform hover:scale-105">
                        <img src="mj.jpg" className="w-[200px] h-[200px] rounded-full shadow-lg" alt="" />
                        <h1 className="text-xl font-bold text-gray-800">Muhammad Jawwad Abdukadir</h1>
                        <h2 className="text-gray-600">Team Member</h2>
                    </div>
                    <div className="space-y-3 flex flex-col items-center transition-transform transform hover:scale-105">
                        <img src="alkali.jpg" className="w-[200px] h-[200px] rounded-full shadow-lg" alt="" />
                        <h1 className="text-xl font-bold text-gray-800">Muhammad Alkali</h1>
                        <h2 className="text-gray-600">Team Member</h2>
                    </div>
                    <div className="space-y-3 flex flex-col items-center transition-transform transform hover:scale-105">
                        <img src="igor.jpeg" className="w-[200px] h-[200px] rounded-full shadow-lg" alt="" />
                        <h1 className="text-xl font-bold text-gray-800">Yusuf Muhammad</h1>
                        <h2 className="text-gray-600">Team Member</h2>
                    </div>
                </section>
                <section className="flex space-x-12 p-12">
                    <div className="space-y-3 flex flex-col items-center transition-transform transform hover:scale-105">
                        <img src="senator.jpg" className="w-[200px] h-[200px] rounded-full shadow-lg" alt="" />
                        <h1 className="text-xl font-bold text-gray-800">Nasir Giade</h1>
                        <h2 className="text-gray-600">Team Member</h2>
                    </div>
                    <div className="space-y-3 flex flex-col items-center transition-transform transform hover:scale-105">
                        <img src="farouk.jpg" className="w-[200px] h-[200px] rounded-full shadow-lg" alt="" />
                        <h1 className="text-xl font-bold text-gray-800">Farouk Abdulkadir</h1>
                        <h2 className="text-gray-600">Team Member</h2>
                    </div>
                </section>
            </section>
        </>
    )
}

export default Team