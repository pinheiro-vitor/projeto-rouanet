import {
    Box,
    ChakraProvider,
    Container,
    Flex,
    Heading,
    HStack,
    Spacer,
  } from "@chakra-ui/react";
  import { useEffect, useState } from "react";
  import { IProjeto } from "./@types/projeto";
  import ListaProjeto from "./Components/ListaProjeto";
  import ProjetoService from "./Services/ProjetoService";
  import { Swiper, SwiperSlide } from "swiper/react";
  import { Navigation, Pagination } from "swiper/modules";
  
  import "swiper/css";
  import "swiper/css/pagination";
  
  function App() {
    const [projetos, setProjetos] = useState<IProjeto[]>([]);
  
    const fetchProjetos = async () => {
      try {
        const response = await ProjetoService.fetchAll();
        console.log(response.data.data);
        setProjetos(response.data.data);
      } catch (error: any) {
        console.log(error.message);
      }
    };
    useEffect(() => {
      fetchProjetos();
    }, []);
  
    return (
      <ChakraProvider>
        <Flex
          minWidth="full"
          minHeight="100vh"
          justifyContent="center"
          alignItems="center"
          direction="column"
        >
          <Container minWidth="full" maxHeight="600px">
            <Heading size="md" mb="3">
              Ver outros Projetos do Proponente
            </Heading>

            <Swiper
              slidesPerView={4}
              spaceBetween={30}
              navigation={true}
              grabCursor={true}
              pagination={{
                clickable: true,
              }}
              modules={[Pagination, Navigation]}
              className="mySwiper"
            >
              {projetos && projetos.map((projeto, index) => (
                <SwiperSlide key={index}>
                  <ListaProjeto projeto={projeto} />
                </SwiperSlide>
              ))}
            </Swiper>
          </Container>
        </Flex>
      </ChakraProvider>
    );
  }
  
  export default App;